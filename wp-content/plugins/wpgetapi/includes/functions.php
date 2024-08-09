<?php

/*
 * Pretty print when debugging is enabled in options
 */
if ( ! function_exists( 'wpgetapi_pp' ) ) {
	function wpgetapi_pp( $array_data ) {
		echo '<pre style="white-space:pre-wrap;">';
			print_r( $array_data );
		echo '</pre>' . "\n";
	}
}


/**
 * Dropdown options for results_format
 * It is set up this way so we can easily add the filter to be able to add extra format options
 *
 */
function wpgetapi_results_format_options( $field ) {
	$options = apply_filters(
		'wpgetapi_results_format_options',
		array(
			'json_string'  => __( 'JSON string', 'wpgetapi' ),
			'json_decoded' => __( 'PHP array data', 'wpgetapi' ),
		)
	);
	return $options;
}


/**
 * Recursive sanitation for text or array
 *
 * @param $array_or_string (array|string)
 * @since  1.0.0
 * @return mixed
 */
function wpgetapi_sanitize_text_or_array( $array_or_string ) {
	if ( is_string( $array_or_string ) ) {
		$array_or_string = sanitize_text_field( $array_or_string );
	} elseif ( is_array( $array_or_string ) ) {
		foreach ( $array_or_string as $key => &$value ) {
			if ( is_array( $value ) ) {
				$value = wpgetapi_sanitize_text_or_array( $value );
			} else {
				$value = sanitize_text_field( $value );
			}
		}
	}

	return $array_or_string;
}


/**
 * wpgetapi_output_endpoint_test_area
 *
 */
function wpgetapi_output_top_of_endpoint( $field_args, $field ) {

	ob_start();

	$test_disabled = true;

	if ( $field->value ) {
		$test_disabled = false;
	}

	if ( is_ssl() ) {
		$copy_template_tag_html = '<span title="' . esc_html__( 'Copy template tag', 'wpgetapi' ) . '" class="copy-this dashicons dashicons-admin-page"></span>';
		$copy_shortcode_html    = '<span title="' . esc_html__( 'Copy shortcode', 'wpgetapi' ) . '" class="copy-this dashicons dashicons-admin-page"></span>';
	} else {
		$copy_template_tag_html = '';
		$copy_shortcode_html    = '';
	}
	?>

	<pre class="functions">
		<div class="wrapper"><div>Template Tag:</div> <span class="wpgetapi-template-tag wpgetapi-copy">wpgetapi_endpoint( '<?php echo esc_html( $field->args['api_id'] ); ?>', '<span class='endpoint_id'></span>', array( 'debug' => false ) );</span> <?php echo $copy_template_tag_html; ?></div>
		<div class="wrapper"><div>Shortcode:</div> <span class="wpgetapi-shortcode wpgetapi-copy">[wpgetapi_endpoint api_id='<?php echo esc_html( $field->args['api_id'] ); ?>' endpoint_id='<span class='endpoint_id'></span>' debug='false']</span> <?php echo $copy_shortcode_html; ?></div>
	</pre>

	<div class="wpgetapi-test-area" data-endpoint="<?php echo esc_attr( $field->value ); ?>" data-api="<?php echo esc_attr( $field->args['api_id'] ); ?>">
		
		<span class="handle" style="display:none">Hide/Show Results</span>

		<?php do_action( 'wpgetapi_admin_before_test_result' ); ?>

		<div class="wpgetapi-result"></div>
	</div>

	<div class="fields-wrapper">

	<?php

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}


/**
 * Ensure our unique ID's are only lowercase and underscores
 *
 * @param  mixed      $value      The unsanitized value from the form.
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object
 *
 * @return mixed                  Sanitized value to be stored.
 */
function wpgetapi_sanitize_unique_id( $value, $field_args, $field ) {
	$sanitized_value = sanitize_file_name( $value );
	$sanitized_value = str_replace( '-', '_', $sanitized_value );
	$sanitized_value = str_replace( '.', '_', $sanitized_value );
	$sanitized_value = str_replace( '^', '_', $sanitized_value );
	$sanitized_value = str_replace( '@', '_', $sanitized_value );
	return $sanitized_value;
}

