<?php
/**
 * Art And Craft: Block Patterns
 *
 * @since Art And Craft 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Art And Craft 1.0
 *
 * @return void
 */
function art_and_craft_register_block_patterns() {
	$block_pattern_categories = array(
		'art-and-craft'    => array( 'label' => __( 'Art And Craft', 'art-and-craft' ) ),
	);

	$block_pattern_categories = apply_filters( 'art_and_craft_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'art_and_craft_register_block_patterns', 9 );
