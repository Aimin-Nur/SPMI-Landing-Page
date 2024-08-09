<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The main class
 *
 * @since 1.0.0
 */
class WpGetApi_Api {

	public $encryption = ''; // the encryption class

	public $setup = ''; // store the setup data from the admin page
	public $api   = ''; // store the api's from the admin page

	public $api_id      = ''; // the api_id that we are wanting to get
	public $endpoint_id = ''; // the endpoint_id that we are wanting to get
	public $args        = ''; // the args
	public $keys        = ''; // the keys we want to retrieve

	public $base_url           = ''; // base url of the API
	public $method             = 'GET'; // the endpoint method GET POST etc
	public $cache_time         = ''; // the time to cache
	public $endpoint           = ''; // the endpoint that we will get
	public $query_parameters   = ''; // the query paramaters appended to url
	public $header_parameters  = ''; // the header paramaters
	public $body_parameters    = ''; // the body paramaters
	public $body_json_encode   = ''; // body_json_encode body
	public $body_url_encode    = ''; // urlencode body
	public $body_base64_encode = ''; // base64 encode body
	public $body_xml_format    = ''; // xml format body
	public $xml_root_node      = 'root'; // root node for xml

	public $response = ''; // the returned response

	public $final_url          = ''; // final URL
	public $final_request_args = array(); // final request_args

	public $results_format = 'json_string'; // results format

	public $response_code = ''; // the response code from the call

	public $timeout   = 10; // the timeout
	public $sslverify = 1; // ssl verify
	public $debug     = false;

	public $pro_plugin = false;

	public $oauth2 = false;

	/**
	 * Main constructor
	 *
	 * @since 1.0.0
	 *
	 */
	public function __construct( $api_id = '', $endpoint_id = '', $args = array(), $keys = array() ) {

		$this->setup = get_option( 'wpgetapi_setup' );
		$this->api   = get_option( 'wpgetapi_' . $api_id );

		$this->encryption  = new WpGetApi_Encryption();
		$this->api_id      = sanitize_text_field( $api_id );
		$this->endpoint_id = sanitize_text_field( $endpoint_id );
		$this->keys        = $keys;
		$this->args        = $args;

		add_filter( 'wpgetapi_raw_error_data', array( $this, 'maybe_add_debug_info' ), 99, 2 );
		add_filter( 'wpgetapi_raw_data', array( $this, 'maybe_add_debug_info' ), 99, 2 );
	}


	/**
	 * Init our api data
	 */
	public function init() {

		if ( ! function_exists( 'is_plugin_active' ) ) {
			include_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		$this->pro_plugin = is_plugin_active( 'wpgetapi-extras/wpgetapi-extras.php' ) ? true : false;

		// if we are doing importer plugin,
		// we need to intercept and modify most of our methods values
		if ( $this->api_id === 'wpgetapi_importer' ) {

			$data = apply_filters( 'wpgetapi_api_importer_init', $this );

			if ( $data ) {

				foreach ( $data as $key => $value ) {
					$this->{$key} = $value;
				}

				$this->query_parameters  = ! empty( $this->query_parameters ) ? $this->do_parameters( $this->query_parameters ) : array();
				$this->header_parameters = ! empty( $this->header_parameters ) ? $this->do_parameters( $this->header_parameters ) : array();
				$this->body_parameters   = ! empty( $this->body_parameters ) ? $this->do_parameters( $this->body_parameters ) : array();
				return;

			}
		}

		// do some checks
		if ( empty( $this->setup ) || ! isset( $this->setup['apis'] ) || empty( $this->setup['apis'] ) ) {
			return 'No API found.';
		}

		// do some checks
		if ( ! $this->api || ! isset( $this->api['endpoints'] ) || empty( $this->api['endpoints'] ) ) {
			return 'API not found.';
		}

		// loop through api's
		// set base_url
		foreach ( $this->setup['apis'] as $index => $api_item ) {
			if ( $this->api_id == $api_item['id'] ) {
				$this->base_url = isset( $api_item['base_url'] ) && ! empty( $api_item['base_url'] ) ? esc_url_raw( $api_item['base_url'] ) : '';
			}
		}

		// loop through endpoints
		foreach ( $this->api['endpoints'] as $index => $endpoint ) {

			if ( $this->endpoint_id == $endpoint['id'] ) {

				$this->method     = isset( $endpoint['method'] ) && $endpoint['method'] != '' ? sanitize_text_field( $endpoint['method'] ) : 'GET';
				$this->timeout    = isset( $endpoint['timeout'] ) && ! empty( $endpoint['timeout'] ) ? absint( $endpoint['timeout'] ) : '';
				$this->cache_time = isset( $endpoint['cache_time'] ) && ! empty( $endpoint['cache_time'] ) ? absint( $endpoint['cache_time'] ) : '';
				$this->endpoint   = isset( $endpoint['endpoint'] ) && ! empty( $endpoint['endpoint'] ) ? sanitize_text_field( $endpoint['endpoint'] ) : '';

				$this->query_parameters = isset( $endpoint['query_parameters'] ) && ! empty( $endpoint['query_parameters'] ) ? $this->do_parameters( $endpoint['query_parameters'] ) : array();

				$this->header_parameters = isset( $endpoint['header_parameters'] ) && ! empty( $endpoint['header_parameters'] ) ? $this->do_parameters( $endpoint['header_parameters'] ) : array();

				$this->body_parameters = isset( $endpoint['body_parameters'] ) && ! empty( $endpoint['body_parameters'] ) ? $this->do_parameters( $endpoint['body_parameters'] ) : array();

				// how to encode the body
				$this->body_json_encode   = isset( $endpoint['body_json_encode'] ) && $endpoint['body_json_encode'] == 'true' ? true : false;
				$this->body_url_encode    = isset( $endpoint['body_json_encode'] ) && $endpoint['body_json_encode'] == 'url' ? true : false;
				$this->body_base64_encode = isset( $endpoint['body_json_encode'] ) && $endpoint['body_json_encode'] == 'base64' ? true : false;
				$this->body_xml_format    = isset( $endpoint['body_json_encode'] ) && $endpoint['body_json_encode'] == 'xml' ? true : false;

				$this->xml_root_node = isset( $endpoint['xml_root'] ) && ! empty( $endpoint['xml_root'] ) ? $endpoint['xml_root'] : $this->xml_root_node;

				$this->results_format = isset( $endpoint['results_format'] ) ? sanitize_text_field( $endpoint['results_format'] ) : $this->results_format;

				if ( // set the format to php array data if html format is set
					( isset( $this->args['format'] ) && $this->args['format'] == 'html' && $this->results_format != 'xml_array' ) ||
					// set the format to php array data if it is set in the args (coming from the importer)
					( isset( $this->args['results_format'] ) && $this->args['results_format'] == 'json_decoded' )
				) {
					$this->results_format = 'json_decoded';
				}

				// set the format to JSON string if it is  set in the args (coming from the wpdatatables integration)
				if ( isset( $this->args['results_format'] ) && $this->args['results_format'] == 'json_string' ) {
					$this->results_format = 'json_string';
				}

				// set the format to JSON string if it is  set in the args (coming from the wpdatatables integration)
				if ( isset( $this->args['results_format'] ) && $this->args['results_format'] == 'json_decoded' ) {
					$this->results_format = 'json_decoded';
				}
			}
		}

		$this->timeout   = isset( $this->api['timeout'] ) && ! empty( $this->api['timeout'] ) ? $this->api['timeout'] : $this->timeout;
		$this->sslverify = isset( $this->api['sslverify'] ) ? absint( $this->api['sslverify'] ) : $this->sslverify;
	}


	/**
	 * The main function to output the data
	 *
	 * @param  string  $field Field to retrieve
	 */
	public function endpoint_output() {

		do_action( 'wpgetapi_before_do_the_call', $this );

		return $this->do_the_call();
	}


	/**
	 * Send the request and return our data
	 */
	public function do_the_call() {

		$this->init();

		// build the URL
		$this->final_url = apply_filters( 'wpgetapi_final_url', $this->build_url(), $this );

		// build the request args
		$this->final_request_args = apply_filters( 'wpgetapi_final_request_args', $this->build_request_args(), $this );

		/**
		 * Check if we should stop or not. Setting $on to true, will stop us calling the api.
		 * @param bool   $on Whether on is set or not.
		 */

		if ( apply_filters( 'wpgetapi_should_we_stop', false, $this ) ) {
			return;
		}

		// POST request
		if ( $this->method == 'POST' ) {
			$this->response = $this->POST_request();
		}

		// PUT request
		if ( $this->method == 'PUT' ) {
			$this->response = $this->PUT_request();
		}

		// PATCH request
		if ( $this->method == 'PATCH' ) {
			$this->response = $this->PATCH_request();
		}

		// GET request
		if ( $this->method == 'GET' ) {
			$this->response = $this->GET_request();
		}

		// DELETE request
		if ( $this->method == 'DELETE' ) {
			$this->response = $this->DELETE_request();
		}

		// wp error
		if ( is_wp_error( $this->response ) ) {
			return apply_filters( 'wpgetapi_raw_error_data', json_encode( $this->response ), $this );
		}

		// get response_code
		$this->response_code = wp_remote_retrieve_response_code( $this->response );

		// action to intercept call depending on response_code
		$this->response = apply_filters( 'wpgetapi_before_retrieve_body', $this->response, $this->response_code, $this );

		// get body
		// modified in version 1.6.1 to allow for OAuth 2.0 plugin returning body already
		$data = isset( $this->response['body'] ) ? $this->response['body'] : $this->response;

		// returning in JSON format
		if ( $this->results_format == 'json_string' || $this->results_format == 'json_decoded' ) {
			$data = $this->return_data( $data );
		}

		if ( $data === 'null' ) {
			$data = 'Result is null. Check that all endpoint settings are correct.';
		}

		return apply_filters( 'wpgetapi_raw_data', $data, $this );
	}


	/**
	 * Build the request url with the ability to add args
	 */
	public function build_url() {

		// first make sure our endpoint starts with a slash
		if ( substr( $this->endpoint, 0, 1 ) != '/' ) {
			$this->endpoint = '/' . $this->endpoint;
		}

		// if we have item_key from api to posts plugin
		// replace our keyword with the actual item_key value
		if ( isset( $this->args['item_key'] ) && strpos( $this->endpoint, '(importer:item_key)' ) !== false ) {
			$this->endpoint = str_replace( '(importer:item_key)', $this->args['item_key'], $this->endpoint );
		}

		$this->endpoint = apply_filters( 'wpgetapi_endpoint', $this->endpoint, $this );

		$url = untrailingslashit( $this->base_url ) . $this->endpoint;

		// if we have a URL pagination event from the import plugin
		// we need to modify the URL here
		if ( isset( $this->args['paginate_url'] ) ) {
			$url = $this->args['paginate_url'];
		}

		// filter our params - added for use in Oauth 2.0 plugin
		$params = apply_filters( 'wpgetapi_query_parameters', $this->query_parameters, $this );

		// add empty array - was getting errors if it was just null or false
		$params = empty( $params ) ? array( '' => '' ) : $params;

		$result = add_query_arg( $params, $url );

		return $result;
	}


	/**
	 * build the header with the ability to add args
	 */
	public function build_request_args() {

		// add our header parameters to the headers
		$headers = apply_filters(
			'wpgetapi_header_parameters',
			array(
				'headers' => $this->header_parameters,
			),
			$this
		);

		// if doing POST request, include body paramters
		if ( $this->method == 'POST' || $this->method == 'PUT' || $this->method == 'DELETE' || $this->method == 'PATCH' ) {

			// tokens are sent through here
			$this->body_parameters = apply_filters( 'wpgetapi_body_parameters', $this->body_parameters, $this );

			// do we json_encode the entire body
			if ( $this->body_json_encode == true ) {
				$this->body_parameters = json_encode( $this->body_parameters );
			}

			// do we urlencode the entire body
			if ( $this->body_parameters && $this->body_url_encode == true ) {

				// checking if the parameters have a json string (raw)
				if ( ( ! is_array( $this->body_parameters ) ) &&
					( substr( $this->body_parameters, 0, 1 ) === '{' || substr( $this->body_parameters, 0, 1 ) === '[' )
				) {
					$this->body_parameters = json_decode( $this->body_parameters, true );
				}

				$this->body_parameters = http_build_query( $this->body_parameters, '', '&' );

			}

			// do we xml the entire body
			if ( $this->body_parameters && $this->body_xml_format == true ) {

				$root_node = $this->xml_root_node != '' ? '<' . $this->xml_root_node . '/>' : '';

				$xml_element = apply_filters( 'wpgetapi_xml_element', '<?xml version="1.0" encoding="UTF-8"?>' . $root_node );

				$xml = new SimpleXmlElement( $xml_element );

				foreach ( $this->body_parameters as $key => $value ) {
					$xml->addChild( $key, $value );
				}

				$this->body_parameters = $xml->asXML();

			}

			// do we base64 encode the entire body
			if ( $this->body_parameters && $this->body_base64_encode == true ) {

				$this->body_parameters = is_array( $this->body_parameters ) ? json_encode( $this->body_parameters ) : $this->body_parameters;
				$this->body_parameters = base64_encode( $this->body_parameters );

			}

			$this->body_parameters = apply_filters( 'wpgetapi_modify_formatted_body_parameters', $this->body_parameters, $this );

			// add our body parameters
			if ( $this->body_parameters && ! empty( $this->body_parameters ) ) {
				$headers['body'] = $this->body_parameters;
			}
		}

		// get our body paramters as they are formatted
		// this won't change anything, it just allows us to get the parameters
		$this->body_parameters = apply_filters( 'wpgetapi_final_body_parameters', $this->body_parameters, $this );

		// add headers to our final request args
		$this->final_request_args = wp_parse_args( $headers, $this->final_request_args );

		// build the args taht are sent to the request
		$default_args = apply_filters(
			'wpgetapi_default_request_args_parameters',
			array(
				'timeout'     => ( absint( $this->timeout ) > 0 ? absint( $this->timeout ) : 10 ),
				'sslverify'   => $this->sslverify,
				'redirection' => 5,
				'blocking'    => true,
				'cookies'     => array(),
			)
		);

		return wp_parse_args( $this->final_request_args, $default_args );
	}




	/**
	 * Do a GET request
	 */
	public function GET_request() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid -- Ignore not snake case format because it's used in the other premium plugins.

		$response = '';
		// so we can so something before the remote_get (caching)
		$response = apply_filters( 'wpgetapi_before_get_request', $response, $this );

		if ( empty( $response ) ) {
			$response = wp_remote_get( $this->final_url, $this->final_request_args );
		}

		return $response;
	}

	/**
	 * Do a POST request
	 */
	public function POST_request() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid -- Ignore not snake case format because it's used in the other premium plugins.

		$response = '';
		// so we can so something before the remote_post (caching)
		$response = apply_filters( 'wpgetapi_before_post_request', $response, $this );

		//$this->final_request_args['method'] = 'POST';

		if ( empty( $response ) ) {
			$response = wp_remote_post( $this->final_url, $this->final_request_args );
		}

		return $response;
	}

	/**
	 * Do a PUT request
	 */
	public function PUT_request() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid -- Ignore not snake case format because it's used in the other premium plugins.
		$this->final_request_args['method'] = 'PUT';
		$response                           = wp_remote_request( $this->final_url, $this->final_request_args );
		return $response;
	}

	/**
	 * Do a PATCH request
	 */
	public function PATCH_request() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid -- Ignore not snake case format because it's used in the premium plugins.
		$this->final_request_args['method'] = 'PATCH';
		$response                           = wp_remote_request( $this->final_url, $this->final_request_args );
		return $response;
	}

	/**
	 * Do a DELETE request
	 */
	public function DELETE_request() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid -- Ignore not snake case format because it's used in the premium plugins.
		$this->final_request_args['method'] = 'DELETE';
		$response                           = wp_remote_request( $this->final_url, $this->final_request_args );
		return $response;
	}


	/**
	 * return data
	 */
	public function return_data( $data ) {

		$data = apply_filters( 'wpgetapi_json_response_body_before_decode', $data, $this->keys );

		// converts all data to arrays, removing objects
		if ( is_string( $data ) ) {
			$decode = json_decode( $data, true );
			if ( json_last_error() ) {
				return esc_html( $data );
			} else {
				$data = $decode;
			}
		}

		$data = apply_filters( 'wpgetapi_json_response_body', $data, $this->keys );

		if ( $this->results_format == 'json_string' ) {
			return trim( json_encode( $data, JSON_PRETTY_PRINT ), '"' );
		}

		if ( $this->results_format == 'json_decoded' ) {
			return $data;
		}
	}

	/**
	 * Sort out the parameters if they exist
	 */
	public function do_parameters( $parameters ) {

		$new_array  = array();
		$raw        = '';
		$parameters = $this->decrypt( $parameters );

		if ( is_array( $parameters ) ) {
			foreach ( $parameters as $key => $parameter ) {

				if ( ! empty( $parameter['name'] ) && ( ! empty( $parameter['value'] ) || $parameter['value'] == 0 ) ) {

					$parameter['value'] = stripslashes( $parameter['value'] );

					// if we have wpgetapi_on, delete it so we don't send to api
					if ( $parameter['name'] == 'wpgetapi_on' ) {
						unset( $parameters[ $key ] );
						continue;
					}

					// if we have item_key from api to posts plugin
					// replace our keyword with the actual item_key value
					if ( isset( $this->args['item_key'] ) && strpos( $parameter['value'], '(importer:item_key)' ) !== false ) {
						$parameter['value'] = str_replace( '(importer:item_key)', $this->args['item_key'], $parameter['value'] );
					}

					$new_array[ sanitize_text_field( $parameter['name'] ) ] = $parameter['value'];

					// if we are sending raw body
				} elseif ( empty( $parameter['name'] ) && ! empty( $parameter['value'] ) ) {

					$raw = stripslashes( $parameter['value'] );

				}
			}
		}

		// now look for array or json string and sort these out - for using such things in shortcode
		if ( ! empty( $new_array ) ) {

			foreach ( $new_array as $key => $value ) {

				// checking if the parameters have a json string
				if ( strpos( $value, '{"' ) !== false && strpos( $value, '}' ) !== false ) {

					$tmp_val           = $value;
					$tmp_val           = json_decode( $tmp_val, true );
					$new_array[ $key ] = $tmp_val ? $tmp_val : $value;

				} else {

					// checking if the parameters have an array within the string
					// if they do, create them as an actual array
					if ( substr( $value, 0, 1 ) === '[' && substr( $value, -1 ) === ']' ) {
						$value_arr         = trim( $value );
						$value_arr         = $this->check_contains_array_value( $value_arr ); //If array value pass in body then convert to array from string
						$new_array[ $key ] = $value_arr;
					}
				}

				// set value as integer
				if ( strpos( $value, 'integer(' ) !== false && substr( $value, -1 ) === ')' ) {

					preg_match( '/\(([^\)]*)\)/', $value, $match );
					$result = trim( $match[1] );

					// checking if we have additional token within
					// and we need to send this directly to PRO plugin from here
					if ( strpos( $value, '(' ) !== false && strpos( $value, ':' ) !== false && $this->pro_plugin ) {
						$result = $this->replace_tokens( $result );
					} else {
						$result = $result;
					}

					$new_array[ $key ] = absint( $result );

				}

				// set value as float
				if ( strpos( $value, 'float(' ) !== false && substr( $value, -1 ) === ')' ) {

					preg_match( '/\(([^\)]*)\)/', $value, $match );
					$result = trim( $match[1] );
					if ( substr( $result, 0, 1 ) === '"' && substr( $result, -1 ) === '"' ) {
						$result = trim( $result, '""' );
					}

					// checking if we have additional token within
					// and we need to send this directly to PRO plugin from here
					if ( strpos( $value, '(' ) !== false && strpos( $value, ':' ) !== false && $this->pro_plugin ) {
						$result = $this->replace_tokens( $result );
					}

					$new_array[ $key ] = (float) $result;

				}

				// set value as boolean
				if ( strpos( $value, 'boolean(' ) !== false && substr( $value, -1 ) === ')' ) {
					preg_match( '/\(([^\)]*)\)/', $value, $match );
					$result = $match[1];

					// checking if we have additional token within
					// and we need to send this directly to PRO plugin from here
					if ( strpos( $value, '(' ) !== false && strpos( $value, ':' ) !== false && $this->pro_plugin ) {
						$result = $this->replace_tokens( $result );
					} else {
						$result = $result;
					}

					$result = filter_var( $result, FILTER_VALIDATE_BOOLEAN );

					$new_array[ $key ] = $result;

				}
			}
		}

		return $raw ? $raw : $new_array;
	}


	/**
	 * Do a direct token replacement if PRO plugin installed and is required.
	 */
	public function replace_tokens( $value ) {
		$tokens      = new WpGetApi_Extras_Tokens();
		$action_args = isset( $this->args['action_args'] ) ? $this->args['action_args'] : null;
		$value       = ( substr( $value, -1 ) !== ')' ? $value . ')' : $value );
		$result      = $tokens->replace_tokens( $value, $action_args );
		return $result;
	}


	/**
	 * decrypt our parameters from the DB
	 */
	public function decrypt( $array_or_string ) {

		if ( is_string( $array_or_string ) ) {
			$array_or_string = $this->encryption->decrypt( $array_or_string );
		} elseif ( is_array( $array_or_string ) ) {
			foreach ( $array_or_string as $key => &$value ) {
				if ( $key === 'name' ) {
					continue;
				}
				if ( is_array( $value ) ) {
					$value = $this->decrypt( $value );
				} else {
					$value = $this->encryption->decrypt( $value );

				}
			}
		}
		return $array_or_string;
	}


	/**
	 * check parameter value contains array value
	 * @param string $parameter_value    // parameter value
	 */
	public function check_contains_array_value( $parameter_value ) {
		//check $parameter_value first character [ and last character is ]
		if ( substr( $parameter_value, 0, 1 ) === '[' && substr( $parameter_value, -1 ) === ']' ) {
			$parameter_value = str_replace( "'", '"', $parameter_value ); // replce single quote with the double quote convert into array
			$parameter_value = json_decode( $parameter_value, true ); //If array value pass in body then convert to array
		}
		return $parameter_value;
	}


	/**
	 * debug
	 */
	public function maybe_add_debug_info( $data, $wpgetapi ) {

		if ( ( isset( $this->args['debug'] ) && ( $this->args['debug'] === true || $this->args['debug'] === 'true' ) ) ||
			( isset( $this->args['test_endpoint'] ) && ( $this->args['test_endpoint'] === true ) )
		) {

			$this->debug = true;

			// admin test endpoint button
			$testing = isset( $this->args['test_endpoint'] ) && ( $this->args['test_endpoint'] === true ) ? true : false;

			// get api status from response code
			$status = array(
				'title' => 'Error in API response.',
				'desc'  => 'Check all details within your endpoint. Something is misconfigured.',
				'type'  => '<span class="dashicons dashicons-dismiss"></span>',
			);

			$search = 'cURL error 28';
			if ( isset( $data ) && ! is_array( $data ) && preg_match( "/{$search}/i", $data ) ) {
				$status = array(
					'title' => 'Error!',
					'desc'  => 'Timeout error. Try increasing the timeout value.',
					'type'  => '<span class="dashicons dashicons-dismiss"></span>',
				);
			}

			$search = 'cURL error 60';
			if ( isset( $data ) && ! is_array( $data ) && preg_match( "/{$search}/i", $data ) ) {
				$status = array(
					'title' => 'Error!',
					'desc'  => 'SSL verification has failed. See <a href="https://wordpress.stackexchange.com/a/167910/11827" target="_blank">here</a> for possible solution.',
					'type'  => '<span class="dashicons dashicons-dismiss"></span>',
				);
			}

			if ( $this->response_code >= 200 && $this->response_code <= 299 ) {
				$status = array(
					'title' => 'Success!',
					'desc'  => 'Your API is returning a success message and is returning the data as shown in the Data Output section below. You can modify this by changing the Results Format option or see <a href="https://wpgetapi.com/docs/format-api-data-as-html/">here</a> for info on formatting this data.',
					'type'  => '<span class="dashicons dashicons-yes-alt"></span>',
				);
			}
			if ( $this->response_code >= 400 && $this->response_code <= 499 ) {
				$status = array(
					'title' => 'Bad Request',
					'desc'  => 'This could indicate that the URL you are calling is incorrect or that some other data is missing or incorrect. Please check your Base URL and Endpoint are correct as well as the Request Method.',
					'type'  => '<span class="dashicons dashicons-dismiss"></span>',
				);
			}
			if ( $this->response_code == 401 ) {
				$status = array(
					'title' => 'Unauthorised',
					'desc'  => 'You are successfully connecting to your API. But your API key, login or API credentials are incorrect. See <a href="https://wpgetapi.com/docs/authentication-authorization/">here</a> for info on correctly authorizing your API requests.',
					'type'  => '<span class="dashicons dashicons-warning"></span>',
				);
			}
			if ( $this->response_code == 403 ) {
				$status = array(
					'title' => 'Forbidden',
					'desc'  => 'This could indicate that you may need to get your IP address whitelisted with your API provider or that you do not have access to this API.',
					'type'  => '<span class="dashicons dashicons-dismiss"></span>',
				);
			}
			if ( $this->response_code == 405 ) {
				$status = array(
					'title' => 'Method Not Allowed',
					'desc'  => 'Try changing the Request Method within the endpoint settings.',
					'type'  => '<span class="dashicons dashicons-dismiss"></span>',
				);
			}
			if ( $this->response_code == 415 ) {
				$status = array(
					'title' => 'Unsupported Media Type',
					'desc'  => 'Try adding "Content-type" to the Headers with the Value of "json/application" as shown <a href="https://wpgetapi.com/docs/troubleshooting/">here</a>.',
					'type'  => '<span class="dashicons dashicons-dismiss"></span>',
				);
			}
			if ( $this->response_code >= 500 && $this->response_code <= 599 ) {
				$status = array(
					'title' => 'Internal Server Error',
					'desc'  => 'This indicates an issue with the API server. Contact your API provider.',
					'type'  => '<span class="dashicons dashicons-dismiss"></span>',
				);
			}

			ob_start(); ?>

			<div class="wpgetapi-debug <?php echo $testing ? 'testing' : ''; ?>">
				
				<?php if ( $testing ) { ?>

					<div class="debug-item status">
						<div class="">
							<h5><?php echo $status['type']; ?> <?php echo esc_html( $status['title'] ); ?></h5>
							<span class="desc"><?php echo $status['desc']; ?></span>
						</div>
					</div>
					<div class="debug-item">    
						<h6><?php esc_html_e( 'Full URL', 'wpgetapi' ); ?></h6>
						<p class="small"><?php esc_html_e( 'The full URL that is being called.', 'wpgetapi' ); ?></p>
						<div class="debug-result"><?php echo esc_html( $this->final_url ); ?></div>
					</div>

					<div class="debug-item">
						<h6><?php esc_html_e( 'Data Output', 'wpgetapi' ); ?></h6>
						<p class="small">
						<?php
						esc_html_e( 'The output that has been returned from the API.', 'wpgetapi' );
						echo ' ';
						esc_html_e( 'This is what the shortcode or template tag will display and can be formatted however you like.', 'wpgetapi' );
						?>
						</p>
						<div class="debug-result"><?php wpgetapi_pp( $data ); ?></div>
					</div>

					<div class="debug-item">
						<h6><?php esc_html_e( 'Final Request Arguments', 'wpgetapi' ); ?></h6>
						<p class="small">
						<?php
						esc_html_e( 'The final request arguments sent in the API request.', 'wpgetapi' );
						echo ' ';
						esc_html_e( 'Includes headers and body arguments.', 'wpgetapi' );
						?>
						</p>
						<div class="debug-result"><?php wpgetapi_pp( $this->final_request_args ); ?></div>
					</div>

					<div class="debug-item">
						<h6><?php esc_html_e( 'Response', 'wpgetapi' ); ?></h6>
						<p class="small"><?php esc_html_e( 'The full response from the API request.', 'wpgetapi' ); ?></p>
						<div class="debug-result"><?php wpgetapi_pp( $this->response ); ?></div>
					</div>
				
				<?php } else { ?>

				<h5><strong><?php esc_html_e( 'WPGetAPI, Debug Mode - Plugin Version', 'wpgetapi' ); ?> <?php echo esc_html( WP_Get_API()->version ); ?></strong></h5>
					<p class="small">
					<?php
					esc_html_e( 'Below you will find debug info for the current API call.', 'wpgetapi' );
					echo ' ';
					esc_html_e( 'To turn this off, set debug to false in your shortcode or template tag.', 'wpgetapi' );
					?>
					<br><?php esc_html_e( 'Connecting to API\'s can be tricky - if you require help, please see the', 'wpgetapi' ); ?> <a target="_blank" href="https://wpgetapi.com/docs/"><?php esc_html_e( 'Documentation', 'wpgetapi' ); ?></a>.</p>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Full URL', 'wpgetapi' ); ?></h6>
					<p class="small"><?php esc_html_e( 'The full URL that is being called.', 'wpgetapi' ); ?></p>
					<div class="debug-result"><?php echo esc_html( $this->final_url ); ?></div>
				</div>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Data Output', 'wpgetapi' ); ?></h6>
					<p class="small"><?php esc_html_e( 'The resulting output that has been returned from the API.', 'wpgetapi' ); ?></p>
					<div class="debug-result"><?php wpgetapi_pp( $data ); ?></div>
				</div>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Query String', 'wpgetapi' ); ?></h6>
					<p class="small"><?php esc_html_e( 'The query string parameters (if any) that you have set within the endpoint settings.', 'wpgetapi' ); ?></p>
					<div class="debug-result"><?php wpgetapi_pp( $this->query_parameters ); ?></div>
				</div>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Headers', 'wpgetapi' ); ?></h6>
					<p class="small"><?php esc_html_e( 'The header parameters (if any) that you have set within the endpoint settings.', 'wpgetapi' ); ?></p>
					<div class="debug-result"><?php wpgetapi_pp( $this->header_parameters ); ?></div>
				</div>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Body', 'wpgetapi' ); ?></h6>
					<p class="small"><?php esc_html_e( 'The body parameters (if any) that you have set within the endpoint settings.', 'wpgetapi' ); ?></p>
					<div class="debug-result"><?php wpgetapi_pp( $this->body_parameters ); ?></div>
				</div>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Final Request Arguments', 'wpgetapi' ); ?></h6>
					<p class="small">
					<?php
					esc_html_e( 'The final request arguments sent in the API request.', 'wpgetapi' );
					echo ' ';
					esc_html_e( 'Includes headers and body arguments.', 'wpgetapi' );
					?>
					</p>
					<div class="debug-result"><?php wpgetapi_pp( $this->final_request_args ); ?></div>
				</div>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Arguments', 'wpgetapi' ); ?></h6>
					<p class="small"><?php esc_html_e( 'The arguments set within your shortcode or template tag.', 'wpgetapi' ); ?></p>
					<div class="debug-result"><?php wpgetapi_pp( $this->args ); ?></div>
				</div>

				<div class="debug-item">
					<h6><?php esc_html_e( 'Response', 'wpgetapi' ); ?></h6>
					<p class="small"><?php esc_html_e( 'The full response from the API request.', 'wpgetapi' ); ?></p>
					<div class="debug-result"><?php wpgetapi_pp( $this->response ); ?></div>
				</div>

				<?php } ?>

			</div>

			<?php

			return ob_get_clean();

		} else {

			return $data;

		}
	}
}
