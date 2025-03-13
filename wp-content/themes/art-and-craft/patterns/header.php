<?php
/**
 * Title: Header
 * Slug: art-and-craft/header
 * Categories: art-and-craft, header
 */
?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"top-header","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group top-header has-primary-background-color has-background" style="border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"call-block"} -->
<div class="wp-block-column is-vertically-aligned-center call-block" style="flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":46,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-46"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e('00 1234 567 89','art-and-craft'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"text-block"} -->
<div class="wp-block-column is-vertically-aligned-center text-block" style="flex-basis:60%"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"14px","textTransform":"uppercase"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Art products Exclusive offers and free shipping for orders over $500!','art-and-craft'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"mail-block"} -->
<div class="wp-block-column is-vertically-aligned-center mail-block" style="flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:image {"id":48,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/mail.png'); ?>" alt="" class="wp-image-48"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e('support@example.com','art-and-craft'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#eeeef5","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group menu-header" style="border-bottom-color:#eeeef5;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:columns {"className":"menu-header-inner"} -->
<div class="wp-block-columns menu-header-inner"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:15%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px"}},"textColor":"heading"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-search-wrap"} -->
<div class="wp-block-column is-vertically-aligned-center header-search-wrap" style="flex-basis:25%"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"color":"#eeeef5","width":"1px","radius":"30px"},"color":{"background":"#f5f5f5"}}} -->
<div class="wp-block-columns are-vertically-aligned-center has-border-color has-background" style="border-color:#eeeef5;border-width:1px;border-radius:30px;background-color:#f5f5f5;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"35%","className":"product-cat-box","style":{"border":{"radius":{"topLeft":"30px","bottomLeft":"30px"}},"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"backgroundColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-center product-cat-box has-primary-background-color has-background" style="border-top-left-radius:30px;border-bottom-left-radius:30px;padding-left:var(--wp--preset--spacing--40);flex-basis:35%"><!-- wp:woocommerce/product-categories {"isDropdown":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%","className":"product-search-box","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center product-search-box" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:65%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Here...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"border":{"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"base","textColor":"primary","namespace":"woocommerce/product-search"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"nav-block"} -->
<div class="wp-block-column is-vertically-aligned-center nav-block" style="flex-basis:40%"><!-- wp:navigation {"textColor":"heading","overlayBackgroundColor":"white","overlayTextColor":"black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"500","letterSpacing":"0px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Design","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Hand Print","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blogs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-submenu {"label":"Pages","type":"","url":"#","kind":"custom"} -->
<!-- wp:navigation-link {"label":"Page 1","type":"","url":"#","kind":"custom","className":""} /-->

<!-- wp:navigation-link {"label":"Page 2","type":"","url":"#","kind":"custom","className":""} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/art-wordpress-theme","kind":"custom","className":"buynow"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-cart-block"} -->
<div class="wp-block-column is-vertically-aligned-center header-cart-block" style="flex-basis:20%"><!-- wp:group {"className":"cart-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group cart-box"><!-- wp:shortcode -->

<!-- /wp:shortcode -->

<!-- wp:woocommerce/mini-cart {"iconColor":{"color":"#DA9345","name":"Primary","slug":"primary","class":"has-primary-icon-color"},"productCountColor":{"color":"#222222","name":"Headings","slug":"heading","class":"has-heading-product-count-color"}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->