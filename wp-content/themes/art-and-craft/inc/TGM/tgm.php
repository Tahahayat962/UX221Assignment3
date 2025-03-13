<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function art_and_craft_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'art-and-craft' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'MC Woocommerce Wishlist', 'art-and-craft' ),
			'slug'             => 'smart-wishlist-for-more-convert',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ovation Elements', 'art-and-craft' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	art_and_craft_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'art_and_craft_register_recommended_plugins' );