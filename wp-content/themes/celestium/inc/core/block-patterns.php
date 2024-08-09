<?php

/**
 * celestium: Block Patterns
 *
 * @since celestium 1.0.0
 */

/**
 * Registers pattern categories for celestium
 *
 * @since celestium 1.0.0
 *
 * @return void
 */
function celestium_register_pattern_category()
{
	$block_pattern_categories = array(
		'celestium' => array('label' => __('Celestium', 'celestium')),
	);

	$block_pattern_categories = apply_filters('celestium_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'celestium_register_pattern_category', 9);
