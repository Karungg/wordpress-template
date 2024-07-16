<?php

/**
 * savora: Block Patterns
 *
 * @since savora 1.0.0
 */

/**
 * Registers pattern categories for savora
 *
 * @since savora 1.0.0
 *
 * @return void
 */
function savora_register_pattern_category()
{
	$block_pattern_categories = array(
		'savora' => array('label' => __('Savora Patterns', 'savora')),
	);

	$block_pattern_categories = apply_filters('savora_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'savora_register_pattern_category', 9);
