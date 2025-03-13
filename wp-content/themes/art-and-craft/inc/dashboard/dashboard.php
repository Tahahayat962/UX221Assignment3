<?php

add_action( 'admin_menu', 'art_and_craft_gettingstarted' );
function art_and_craft_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'art-and-craft'), esc_html__('Begin Installation', 'art-and-craft'), 'edit_theme_options', 'art-and-craft-guide-page', 'art_and_craft_guide');
}

function art_and_craft_admin_theme_style() {
   wp_enqueue_style('art-and-craft-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'art_and_craft_admin_theme_style');

if ( ! defined( 'ART_AND_CRAFT_SUPPORT' ) ) {
define('ART_AND_CRAFT_SUPPORT',__('https://wordpress.org/support/theme/art-and-craft/','art-and-craft'));
}
if ( ! defined( 'ART_AND_CRAFT_REVIEW' ) ) {
define('ART_AND_CRAFT_REVIEW',__('https://wordpress.org/support/theme/art-and-craft/reviews/','art-and-craft'));
}
if ( ! defined( 'ART_AND_CRAFT_LIVE_DEMO' ) ) {
define('ART_AND_CRAFT_LIVE_DEMO',__('https://trial.ovationthemes.com/art-and-craft/','art-and-craft'));
}
if ( ! defined( 'ART_AND_CRAFT_BUY_PRO' ) ) {
define('ART_AND_CRAFT_BUY_PRO',__('https://www.ovationthemes.com/products/art-wordpress-theme','art-and-craft'));
}
if ( ! defined( 'ART_AND_CRAFT_PRO_DOC' ) ) {
define('ART_AND_CRAFT_PRO_DOC',__('https://trial.ovationthemes.com/docs/art-and-craft-doc/','art-and-craft'));
}
if ( ! defined( 'ART_AND_CRAFT_FREE_DOC' ) ) {
define('ART_AND_CRAFT_FREE_DOC',__('https://trial.ovationthemes.com/docs/art-and-craft-free-doc/','art-and-craft'));
}
if ( ! defined( 'ART_AND_CRAFT_THEME_NAME' ) ) {
define('ART_AND_CRAFT_THEME_NAME',__('Premium Art And Craft Theme','art-and-craft'));
}
if ( ! defined( 'ART_AND_CRAFT_BUNDLE_LINK' ) ) {
define('ART_AND_CRAFT_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','art-and-craft'));
}
/**
 * Theme Info Page
 */
function art_and_craft_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'art-and-craft'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( ART_AND_CRAFT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'art-and-craft'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( ART_AND_CRAFT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'art-and-craft'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','art-and-craft'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','art-and-craft'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','art-and-craft'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','art-and-craft'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','art-and-craft'); ?></h4>
					<p><?php esc_html_e('To check your website click here','art-and-craft'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','art-and-craft'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','art-and-craft'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','art-and-craft'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( ART_AND_CRAFT_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','art-and-craft'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(ART_AND_CRAFT_THEME_NAME); ?></h3>
				<img class="art_and_craft_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( ART_AND_CRAFT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'art-and-craft'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( ART_AND_CRAFT_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'art-and-craft'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( ART_AND_CRAFT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'art-and-craft'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( ART_AND_CRAFT_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)', 'art-and-craft'); ?></a>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'art-and-craft');?> </li>                 
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'art-and-craft');?> </li>
					<li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'art-and-craft');?> </li>
               <li class="upsell-art_and_craft"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'art-and-craft');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>