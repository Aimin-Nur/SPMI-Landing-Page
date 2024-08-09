<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package celestium
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function celestium_register_block_styles() {
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-outline-2-color',
                'label' => __('Outline with Hover', 'celestium')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-gradient-color',
                'label' => __('Hover: Gradient Color', 'celestium')
            )
        );
    }
    add_action('init', 'celestium_register_block_styles');
}
