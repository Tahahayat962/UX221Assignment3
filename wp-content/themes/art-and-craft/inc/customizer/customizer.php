<?php
/**
 * Art And Craft: Customizer
 *
 * @subpackage Art And Craft
 * @since 1.0
 */

function art_and_craft_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('art_and_craft_pro', array(
        'title'    => __('ART AND CRAFT PREMIUM', 'art-and-craft'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('art_and_craft_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Art_And_Craft_Pro_Control($wp_customize, 'art_and_craft_pro', array(
        'label'    => __('ART AND CRAFT PREMIUM', 'art-and-craft'),
        'section'  => 'art_and_craft_pro',
        'settings' => 'art_and_craft_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'art_and_craft_customize_register' );


define('ART_AND_CRAFT_PRO_LINK',__('https://www.ovationthemes.com/products/art-wordpress-theme','art-and-craft'));

define('ART_AND_CRAFT_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','art-and-craft'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Art_And_Craft_Pro_Control')):
    class Art_And_Craft_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( ART_AND_CRAFT_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE ART AND CRAFT PREMIUM','art-and-craft');?> </a>
	        </div>
            <div class="col-md">
                <img class="art_and_craft_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
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
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( ART_AND_CRAFT_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)','art-and-craft');?> </a>
            </div>
        </label>
    <?php } }
endif;