window.WpGetApi = window.WpGetApi || {};

(function (window, document, $, wpgetapi, undefined) {

	'use strict';

	/**
	 * Start the JS.
	 */
	wpgetapi.onReady = function () {

		var $page = wpgetapi.page();

		wpgetapi.functionsHelp();
		wpgetapi.tooltips();

		$page
			.on( 'click', '.functions .copy-this', wpgetapi.copyThis )
			.on( 'change keyup', '.field-id input', wpgetapi.functionsHelp )
			.on( 'cmb2_remove_row cmb2_add_row cmb2_shift_row', wpgetapi.functionsHelp )
			.on( 'cmb2_add_row', wpgetapi.disableTestUntilSave );

	}

	/**
	 * Do the tooltips
	 */
	wpgetapi.tooltips = function () {
		$( ".wrap.wpgetapi .dashicons-editor-help" ).tooltip(
			{
				items: "[data-tip]",
				content: function () {
					return $( this ).data( "tip" );
				},
				classes: {
					"ui-tooltip": "wpgetapi-tooltip"
				},
				position: { my: 'center bottom-10', at: 'center top' },
				close: function (event, ui) {
					ui.tooltip.hover(
						function () {
							$( this ).stop( true ).fadeTo( 400, 1 );
						},
						function () {
							$( this ).fadeOut(
								"400",
								function () {
									$( this ).remove();
								}
							)
						}
					);
				}
			}
		);
	}

	/**
	 * Copy the template tag or the shortcode
	 */
	wpgetapi.copyThis = function ( e ) {

		const $this      = $( this );
		const textToCopy = $this.prev( '.wpgetapi-copy' ).text();

		navigator.clipboard.writeText( textToCopy ).then(
			function () {
				/* clipboard successfully set */
				$this.after( '<span class="copied">' + wpgetapi_translations.copied_text + '</span>' );
				setTimeout(
					function () {
						$( '.copied' ).remove();
					},
					3000
				);

			},
			function () {
				/* clipboard write failed */
				$this.append( wpgetapi_translations.browser_not_support_message );
			}
		)

	}

	/**
	 * Adds the endpoint into the functions help section,
	 * meaning the Template tag and the shortcode.
	 */
	wpgetapi.functionsHelp = function ( e ) {

		// change, keyup, add_row etc
		if ( e && e.type.length > 0 ) {

			var $this  = $( this );
			var $group = $this.parents( '.cmb-repeatable-grouping' );

			// if we are adding a group, clear it
			if ( e.type == 'cmb2_add_row' ) {
				$group = $( '.cmb-repeatable-grouping' ).last();
				$group.find( '.functions .endpoint_id' ).html( '' );
			}

			// Append the duplicate button inside each .cmbhandle-title element when remove endpoint
			if ( e.type == 'cmb2_remove_row' ) {
				$( '#endpoints_repeat .cmbhandle-title' ).each(
					function () {
						$( this ).append( '<button class="duplicate-endpoint-button button-primary">' + wpgetapi_translations.duplicate_button_text + '</button>' );
					}
				);
			}

			if ( $group.length > 0 ) {
				$group.find( '.functions .endpoint_id' ).html( $this.val() );
			}

			// Append the duplicate button inside each .cmbhandle-title element when remove endpoint
			if (e.type == 'cmb2_remove_row') {
				$( '#endpoints_repeat .cmb-repeatable-grouping' ).each(
					function () {
						var $group         = $( this );
						var endpoint_value = $group.find( '.field-id input' ).val();
						$group.find( '.cmb-group-title' ).html(
							'<span>' + endpoint_value + '</span>' +
							'<button class="test-endpoint-button button-primary">' + wpgetapi_translations.test_endpoint_button_text + '</button>' +
							'<button class="duplicate-endpoint-button button-primary">' + wpgetapi_translations.duplicate_button_text + '</button>'
						);
					}
				);

				$( '#apis_repeat .cmb-repeatable-grouping' ).each(
					function () {
						var $group         = $( this );
						var endpoint_value = $group.find( '.api-id input' ).val();
						$group.find( '.cmb-group-title' ).html( '<span>' + endpoint_value + '</span>' );
					}
				);
			}

		} else {

			$( '.cmb-repeatable-grouping' ).each(
				function ( index, value ) {

					var $group         = $( this );
					var endpoint_value = $group.find( '.field-id input' ).val();
					$group.find( '.functions .endpoint_id' ).html( endpoint_value );

				}
			);

		}

	}

	/**
	 * Disable the Test Endpoint button on adding new row.
	 *
	 */
	wpgetapi.disableTestUntilSave = function ( evt, row ) {
		var $row = $( row );
		$row.find( '.wpgetapi .test-endpoint-button' ).attr( 'disabled', true );
	}

	/**
	 * Gets jQuery object containing all . Caches the result.
	 *
	 * @since  1.0.0
	 *
	 * @return {Object} jQuery object containing all.
	 */
	wpgetapi.page = function () {
		if ( wpgetapi.$page ) {
			return wpgetapi.$page;
		}
		wpgetapi.$page = $( '.wpgetapi' );
		return wpgetapi.$page;
	};

	$( wpgetapi.onReady );

}(window, document, jQuery, window.WpGetApi));