<?php
/**
 *
 * WARNING: Please do not edit this file.
 * @see http://codex.wordpress.org/Child_Themes
 *
 */

/**
 * This function registers all content layouts available in this theme.
 */
if ( ! function_exists( 'sds_content_layouts' ) ) {
	function sds_content_layouts() {
		$content_layouts = array(
			'default' => array( // Name used in saved option
				'label' => __( 'Default', 'simple-shop' ), // Label on options panel (required)
				'preview' => '<div class="cols cols-1 cols-default"><div class="col col-content" title="%1$s"><span class="label">%1$s</span></div></div>', // Preview on options panel (required; %1$s is replaced with values below on options panel if specified)
				'preview_values' => array( __( 'Default', 'simple-shop' ) ),
				'default' => true
			),
			'cols-2' => array( // Content Left, Primary Sidebar Right
				'label' => __( 'Content Left', 'simple-shop' ),
				'preview' => '<div class="cols cols-2"><div class="col col-content"></div><div class="col col-sidebar"></div></div>'
			)
		);

		return apply_filters( 'sds_theme_options_content_layouts', $content_layouts );
	}
}

/**
 * This function modifies the global $content_width value based on content layout or page template settings.
 */
if ( ! function_exists( 'simple_shop_body_class' ) ) {
	add_filter( 'body_class', 'simple_shop_body_class', 20 );

	function simple_shop_body_class( $classes ) {
		global $sds_theme_options, $content_width;

		// Simple Shop Customizer
		$simple_shop_customizer = Simple_Shop_Customizer_Instance();

		// Content layout was specified by user in Theme Options
		if ( isset( $sds_theme_options['body_class'] ) && ! empty( $sds_theme_options['body_class'] ) )
			// 1 Column
			if ( $sds_theme_options['body_class'] !== 'cols-1' )
				$content_width = 950;

		// Page Template was specified by the user for this page
		if ( ! empty( $sds_theme_options['page_template'] ) && $sds_theme_options['page_template'] !== 'default' )
			// Full Width or Landing Page
			if ( in_array( $sds_theme_options['page_template'], array( 'page-full-width.php', 'page-landing-page.php' ) ) )
				$content_width = 950;


		// Customizer
		if ( $simple_shop_customizer->is_customize_preview() )
			$classes['simple-shop-customizer'] = 'customizer';

		return $classes;
	}
}


/**
 * This function sets a default featured image size for use in this theme.
 */
if ( ! function_exists( 'sds_theme_options_default_featured_image_size' ) ) {
	add_filter( 'sds_theme_options_default_featured_image_size', 'sds_theme_options_default_featured_image_size' );

	function sds_theme_options_default_featured_image_size( $default ) {
		return 'simple-shop-425x280';
	}
}

/**
 * Filters the blog title tag
 *
 * @param $tag
 *
 * @return string
 */
function sds_logo_filter( $tag ) {
	return 'h1';
}

add_action( 'sds_logo_wrapper_element', 'sds_logo_filter', 1, 10 );

/**
 * Filters the blog tagline tag
 *
 * @param $tag
 *
 * @return string
 */
function sds_tagline_filter( $tag ) {
	return 'h2';
}

add_action( 'sds_tagline_wrapper_element', 'sds_tagline_filter', 1, 10 );

/**
 * This function outputs a title for Archive page templates.
 *
 * Overwrites sds_archive_title in theme-functions.php line 219
 */
function sds_archive_title() {
	global $sds_theme_options;

	// Author
	if ( is_author() ) :
		$author = get_user_by( 'slug', get_query_var( 'author_name' ) ); // Get user data by slug with value of author_name in query
	?>
		<h1 title="<?php esc_attr_e( 'Author Archive:', 'simple-shop' ); ?> <?php echo ( $author instanceof WP_User ) ? $author->display_name : false; ?>" class="page-title author-archive-title block-title">
			<?php _e( 'Author Archive:', 'simple-shop' ); ?> <?php echo ( $author instanceof WP_User ) ? $author->display_name : false; ?>
		</h1>
	<?php
	// Categories
	elseif ( is_category() ) :
		?>
		<h1 title="<?php single_cat_title( __( 'Category Archive: ', 'simple-shop' ) ); ?>" class="page-title category-archive-title block-title">
			<?php single_cat_title( __( 'Category Archive: ', 'simple-shop' ) ); ?>
		</h1>
	<?php
	// Tags
	elseif ( is_tag() ) :
	?>
		<h1 title="<?php single_tag_title( __( 'Tag Archive: ', 'simple-shop' ) ); ?>" class="page-title tag-archive-title block-title">
			<?php single_tag_title( __( 'Tag Archive: ', 'simple-shop' ) ); ?>
		</h1>
	<?php
	// Daily Archives
	elseif ( is_day() ) :
		$the_date = get_the_date();
	?>
		<h1 title="<?php esc_attr_e( 'Daily Archives:', 'simple-shop' ); ?> <?php echo $the_date; ?>" class="page-title day-archive-title daily-archive-title block-title">
			<?php _e( 'Daily Archives:', 'simple-shop' ); ?> <?php echo $the_date; ?>
		</h1>
	<?php
	// Monthly Archives
	elseif ( is_month() ) :
		$the_date = get_the_date( 'F Y' );
	?>
		<h1 title="<?php esc_attr_e( 'Monthly Archives:', 'simple-shop' ); ?> <?php echo $the_date; ?>" class="page-title month-archive-title monthly-archive-title block-title">
			<?php _e( 'Monthly Archives:', 'simple-shop' ); ?> <?php echo $the_date; ?>
		</h1>
	<?php
	// Yearly Archives
	elseif ( is_year() ) :
		$the_date = get_the_date( 'Y' );
	?>
		<h1 title="<?php esc_attr_e( 'Yearly Archives:', 'simple-shop' ); ?> <?php echo $the_date; ?>" class="page-title year-archive-title yearly-archive-title block-title">
			<?php _e( 'Yearly Archives:', 'simple-shop' ); ?> <?php echo $the_date; ?>
		</h1>
	<?php
	endif;
}

if ( ! function_exists( 'sds_theme_options_ads' ) ) {
	add_action( 'sds_theme_options_ads', 'sds_theme_options_ads' );

	function sds_theme_options_ads() {
	?>
		<div class="sds-theme-options-ad">
			<a href="<?php echo esc_url( sds_get_pro_link( 'theme-options-ad' ) ); ?>" target="_blank" class="sds-theme-options-upgrade-ad">
				<h3><?php _e( 'Upgrade to Simple Shop Pro!', 'simple-shop' ); ?></h3>
				<ul>
					<li><?php _e( 'Priority Ticketing Support', 'simple-shop' ); ?></li>
					<li><?php _e( 'More Customizer Settings - Colors &amp; Typography', 'simple-shop' ); ?></li>
					<li><?php _e( 'Conductor Support', 'simple-shop' ); ?></li>
					<li><?php _e( 'Easily Add Custom Scripts/Styles', 'simple-shop' ); ?></li>
					<li><?php _e( 'and More!', 'simple-shop' ); ?></li>
				</ul>

				<span class="sds-theme-options-btn-green"><?php _e( 'Upgrade Now!', 'simple-shop' ); ?></span>
			</a>
		</div>
	<?php
	}
}

if ( ! function_exists( 'sds_theme_options_upgrade_cta' ) ) {
	add_action( 'sds_theme_options_upgrade_cta', 'sds_theme_options_upgrade_cta' );

	function sds_theme_options_upgrade_cta( $type ) {
		switch( $type ) :
			case 'color-schemes':
		?>
				<p>
					<?php
						printf( '<a href="%1$s" target="_blank">%2$s</a> %3$s',
							esc_url( sds_get_pro_link( 'theme-options-colors' ) ),
							__( 'Upgrade to Simple Shop Pro', 'simple-shop' ),
							__( 'and receive more color schemes!', 'simple-shop' )
						);
					?>
				</p>
		<?php
			break;
			case 'web-fonts':
		?>
				<p>
					<?php
						printf( '<a href="%1$s" target="_blank">%2$s</a> %3$s',
							esc_url( sds_get_pro_link( 'theme-options-fonts' ) ),
							__( 'Upgrade to Simple Shop Pro', 'simple-shop' ),
							__( 'to use more web fonts!', 'simple-shop' )
						);
					?>
				</p>
		<?php
			break;
			case 'help-support':
		?>
				<p>
					<?php
						printf( '<a href="%1$s" target="_blank">%2$s</a> %3$s',
							esc_url( sds_get_pro_link( 'theme-options-help' ) ),
							__( 'Upgrade to Simple Shop Pro', 'simple-shop' ),
							__( 'to receive priority ticketing support!', 'simple-shop' )
						);
					?>
				</p>
		<?php
			break;
		endswitch;
	}
}

function sds_get_pro_link( $content ) {
	return esc_url( 'https://slocumthemes.com/wordpress-themes/simple-shop-pro/?utm_source=simple-shop&utm_medium=link&utm_content=' . urlencode( sanitize_title_with_dashes( $content ) ) . '&utm_campaign=pro#purchase-theme' );
}

if ( ! function_exists( 'sds_theme_options_help_support_tab_content' ) ) {
	add_action( 'sds_theme_options_help_support_tab_content', 'sds_theme_options_help_support_tab_content' );

	function sds_theme_options_help_support_tab_content( ) {
	?>
		<p><?php printf( __( 'If you\'d like to create a support request, please visit the <a href="%1$s">Simple Shop Forums on WordPress.org</a>.', 'simple-shop' ), esc_url( 'http://wordpress.org/support/theme/simple-shop/' ) ); ?></p>
	<?php
	}
}

if ( ! function_exists( 'sds_copyright_branding' ) ) {
	add_filter( 'sds_copyright_branding', 'sds_copyright_branding', 10, 2 );

	function sds_copyright_branding( $text, $theme_name ) {
		return sprintf( __( '<a href="%1$s">%2$s by Slocum Studio</a>', 'simple-shop' ), esc_url( 'https://slocumthemes.com/wordpress-themes/simple-shop-free/' ), $theme_name );
	}
}


/**
 * This function sanitizes hex color strings.
 */
function simple_shop_sanitize_hex_color( $color ) {
	// Use the sanitize_hex_color() function if it exists
	if ( function_exists( 'sanitize_hex_color' ) )
		return sanitize_hex_color( $color );

	// Fallback logic
	if ( '' === $color )
		return '';

	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;

	return null;
}


if ( ! function_exists( 'sds_about_page_pro_content_layouts_count' ) ) {
	add_filter( 'sds_about_page_pro_content_layouts_count', 'sds_about_page_pro_content_layouts_count' );

	function sds_about_page_pro_content_layouts_count( $count ) {
		return 1;
	}
}

/**
 * Load the theme function files (options panel, theme functions, widgets, etc...).
 */

include_once get_template_directory() . '/theme/class-simple-shop.php'; // Simple Shop Class (main functionality, actions/filters)
include_once get_template_directory() . '/theme/class-simple-shop-customizer.php'; // Simple Shop Customizer Class (specific to the customizer)

include_once get_template_directory() . '/includes/class-tgm-plugin-activation.php'; // TGM Activation

include_once get_template_directory() . '/includes/theme-options.php'; // SDS Theme Options
include_once get_template_directory() . '/includes/theme-functions.php'; // SDS Theme Options Functions
include_once get_template_directory() . '/includes/widget-social-media.php'; // SDS Social Media Widget
include_once get_template_directory() . '/theme/class-simple-shop-recent-posts.php'; // Simple Shop Recent Posts Widget
