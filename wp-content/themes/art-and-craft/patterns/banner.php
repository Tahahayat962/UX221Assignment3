<?php
/**
 * Title: Banner
 * Slug: art-and-craft/banner
 * Categories: art-and-craft, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":159,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.27,"y":0.49},"minHeight":600,"minHeightUnit":"px","isDark":false,"className":"banner-image-cover","style":{"spacing":{"padding":{"right":"0","left":"0"}},"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover is-light banner-image-cover" style="border-radius:20px;padding-right:0;padding-left:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-159" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" style="object-position:27% 49%" data-object-fit="cover" data-object-position="27% 49%"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"banner-content-box wow zoomIn"} -->
<div class="wp-block-column banner-content-box wow zoomIn"><!-- wp:heading {"textAlign":"left","level":6,"className":"banner-shot-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"30px"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"2px","bottom":"2px"}}},"backgroundColor":"primary","textColor":"white"} -->
<h6 class="wp-block-heading has-text-align-left banner-shot-heading has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:2px;padding-right:var(--wp--preset--spacing--40);padding-bottom:2px;padding-left:var(--wp--preset--spacing--40);font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('Wonderful Artistry','art-and-craft'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"40px"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:700"><?php esc_html_e('Arts &amp; Craft That Touch','art-and-craft'); ?><br><?php esc_html_e('Your Soul and Mind','art-and-craft'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"15px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"30px"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:15px;font-style:normal;font-weight:500"><a class="wp-block-button__link wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('View Collection','art-and-craft'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->