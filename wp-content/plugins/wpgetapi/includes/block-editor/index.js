/* global wpforms_gutenberg_form_selector */
/*jshint es3: false, esversion: 6 */

"use strict";

const { createElement, Fragment }                              = wp.element;
const { registerBlockType }                                    = wp.blocks;
const { InspectorControls }                                    = wp.blockEditor || wp.editor;
const { SelectControl, ToggleControl, PanelBody, Placeholder } = wp.components;
const { useBlockProps, InnerBlocks }                           = wp.blockEditor;

const wpgetapiIcon = createElement(
	'svg',
	{ width: 44, height: 44, viewBox: '0 0 250 250', className: 'dashicon' },
	createElement(
		'path',
		{
			fill: 'currentColor',
			d: 'M125 7.4429C102.935 10.6551 90.6462 34.4894 102.479 53.9992C106.132 60.022 115.887 62.5629 118.397 68.2245C120.771 73.5806 121.292 97.9627 117.397 102.362C114.541 105.587 109.366 106.589 106.004 109.34C103.243 111.599 100.731 116.232 97.3349 117.454C94.8274 118.357 91.3045 116.437 89 115.576C82.2487 113.051 69.6636 111.546 64.5995 106.298C58.5286 100.006 60.0204 89.6253 51.9097 83.0432C36.8351 70.8097 13.0963 76.0198 5.24383 94C-1.57998 109.625 5.87098 128.82 22 134.757C30.9984 138.069 40.8463 137.276 49 132.031C52.0339 130.079 54.5302 126.504 58 125.353C64.2865 123.268 84.3191 131.631 89.7215 135.278C93.8277 138.05 93.1258 144.706 94.4429 149C96.3974 155.372 100.768 161.386 106.004 165.471C113.168 171.059 122.029 173.365 131 172.961C134.346 172.81 138.678 170.713 141.91 171.626C149.032 173.637 157.752 189.206 162.191 195C168.194 202.837 161.477 210.041 162.091 219C163.403 238.147 181.534 250.71 200 246.471C217.622 242.426 227.126 221.076 219.676 205C214.933 194.764 205.387 187.793 194 187.094C189.947 186.845 184.799 189.323 181.015 187.799C175.242 185.473 170.574 176.71 166.8 172C164.202 168.758 157.305 163.051 157.558 158.576C157.72 155.706 160.29 152.679 161.29 150C162.793 145.976 162.653 139.904 165.024 136.419C168.051 131.969 178.151 130.526 183 128.783C186.889 127.385 192.787 124.088 196.996 124.928C201.014 125.73 203.737 130.265 207.039 132.441C213.292 136.559 221.768 137.741 229 136.181C250.888 131.457 260.89 104.613 246.521 87.0147C234.394 72.1623 211.092 73.2277 199.39 88.0039C195.39 93.0548 195.999 102.159 191.486 106.157C186.88 110.237 164.881 118.606 159 116.647C154.049 114.996 143.496 106.781 139.318 103.182C134.399 98.9445 135.61 75.2049 137.318 69.108C139.11 62.7134 151.001 58.861 154.598 52C165.245 31.6942 149.059 3.94038 125 7.4429z',
	}
		),
	createElement(
		'path',
		{
			fill: '#ffffff',
			d: 'M125 23.537C107.574 27.56 113.694 54.4586 131 50.463C148.107 46.5133 142.301 19.5429 125 23.537M29.0008 93.5695C11.7821 98.2439 19.9615 124.673 37 119.347C53.1652 114.295 45.5291 89.0824 29.0008 93.5695M220.001 93.5586C203.242 97.8946 210.118 123.722 226.999 119.58C243.93 115.426 237.018 89.156 220.001 93.5586M123 118.532C98.9832 124.252 108.244 161.924 132 156.471C157.023 150.727 147.899 112.602 123 118.532M187.001 204.742C170.669 211.013 180.934 236.502 197 229.991C213.811 223.178 203.722 198.322 187.001 204.742z',
	}
		),
	createElement(
		'path',
		{
			fill: '#ffffff',
			d: 'M0 255L1 256L0 255z',
	}
		),
);

registerBlockType(
	"wpgetapi/endpoint-selector",
	{
		title: "WPGetAPI",
		description: "Add your API endpoints",
		icon: wpgetapiIcon,
		keywords: "[api, wpgetapi, endpoint]",
		category: "widgets",
		attributes: wpgetapi_block_editor.attributes,
		example: {
			attributes: {
				preview: false,
			},
		},
		edit( props ) {
			const {
				attributes: {
					api_id             = "",
					endpoint_id        = "",
					debug              = "",
					format             = "",
					html_tag           = "",
					html_labels        = "",
					keys               = "",
					query_variables    = "",
					endpoint_variables = "",
					preview            = false
				},
				setAttributes,
			}                          = props;
			const apiOptions           = wpgetapi_block_editor.apis.map(
			(value) => ({
				value: value.api_id,
				label: value.api_id,
			})
			);
		const endpointOptions          = wpgetapi_block_editor.endpoints.map(
			(value) => ({
				value: value.endpoint_id,
				label: value.endpoint_id,
			})
			);
		let jsx;

		apiOptions.unshift( { value: "", label: "Select an API" } );
		endpointOptions.unshift( { value: "", label: "Select an endpoint" } );

		function selectApi(value) {
			setAttributes( { api_id: value } );
		}
		function selectEndpoint(value) {
			setAttributes( { endpoint_id: value } );
		}
		function selectDebug(value) {
			setAttributes( { debug: value } );
		}
		function selectFormat(value) {
			setAttributes( { format: value } );
		}
		function selectHtmlTag(value) {
			setAttributes( { html_tag: value } );
		}
		function selectHtmlLabels(value) {
			setAttributes( { html_labels: value } );
		}

		jsx = [
			React.createElement(
				InspectorControls,
				{
					key: "wpgetapi-gutenberg-endpoint-selector-inspector-controls",
					},
				React.createElement(
					PanelBody,
					{ title: "Endpoint" },
					React.createElement(
						SelectControl,
						{
							label: "API",
							value: api_id,
							options: apiOptions,
							onChange: selectApi,
						}
						),
					React.createElement(
						SelectControl,
						{
							label: "Endpoint",
							value: endpoint_id,
							options: endpointOptions,
							onChange: selectEndpoint,
						}
						),
					React.createElement(
						SelectControl,
						{
							label: "Debug",
							value: debug,
							options: [
							{ label: 'False', value: 'false' },
							{ label: 'True', value: 'true' },
							],
							onChange: selectDebug,
						}
						),
					React.createElement(
						SelectControl,
						{
							label: "Format",
							value: format,
							options: wpgetapi_block_editor.select_options.format,
							onChange: selectFormat,
						}
						),
					React.createElement(
						SelectControl,
						{
							label: "HTML Tags",
							value: html_tag,
							options: wpgetapi_block_editor.select_options.html_tags,
							onChange: selectHtmlTag,
						}
						),
					React.createElement(
						SelectControl,
						{
							label: "HTML Labels",
							value: html_labels,
							options: wpgetapi_block_editor.select_options.html_labels,
							onChange: selectHtmlLabels,
						}
						)
				)
			),
		];

		if (endpoint_id) {
			jsx.push(
			React.createElement(
					wp.serverSideRender,
					{
						key: "wpgetapi-gutenberg-endpoint-selector-server-side-renderer",
						block: "wpgetapi/endpoint-selector",
						attributes: props.attributes,
					}
					)
			);
		} else {
			jsx.push(
			React.createElement(
				Placeholder,
				{
					key: "wpgetapi-gutenberg-endpoint-selector-wrap",
					className:
						"wpgetapi-gutenberg-endpoint-selector-wrap wp-block",
					},
				React.createElement( "img", { src: wpgetapi_block_editor.logo_url } ),
				React.createElement( "h3", null, 'WPGetAPI' ),
				React.createElement(
						SelectControl,
						{
							key: "wpgetapi-gutenberg-api-selector-select-control",
							value: api_id,
							options: apiOptions,
							onChange: selectApi,
						}
						),
				React.createElement(
						SelectControl,
						{
							key: "wpgetapi-gutenberg-endpoint-selector-select-control",
							value: endpoint_id,
							options: endpointOptions,
							onChange: selectEndpoint,
						}
						)
			)
			);
		}

		return jsx;
		},
		save() {
			return null;
		},
}
	);
