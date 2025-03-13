<?php
/**
 * Title: Latest Offer 
 * Slug: art-and-craft/latest-offer
 * Categories: art-and-craft, latest-offer
 */
?>

<?php if (class_exists('WooCommerce')) { ?>
	<!-- wp:group {"className":"offer-zone","layout":{"type":"constrained","contentSize":"80%"}} -->
	<div class="wp-block-group offer-zone"><!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
	<div class="wp-block-group sec-head"><!-- wp:heading {"textAlign":"center","level":6,"className":"sec-shot-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"30px"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"2px","bottom":"2px"}}},"backgroundColor":"primary","textColor":"white"} -->
	<h6 class="wp-block-heading has-text-align-center sec-shot-heading has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:2px;padding-right:var(--wp--preset--spacing--40);padding-bottom:2px;padding-left:var(--wp--preset--spacing--40);font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e('Offer Zone','art-and-craft'); ?></h6>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:25px;font-style:normal;font-weight:800"><?php esc_html_e('Discover Latest Offer','art-and-craft'); ?></h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":[],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"wow  slideInUp"} -->
	<div class="wp-block-woocommerce-product-collection wow  slideInUp"><!-- wp:woocommerce/product-template -->
	<!-- wp:group {"className":"product-img-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group product-img-wrap"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"10px"}}} /-->

	<!-- wp:woocommerce/product-button {"textAlign":"right","isDescendentOfQueryLoop":true,"className":"cart-btn","fontSize":"small"} /--></div>
	<!-- /wp:group -->

	<!-- wp:post-terms {"term":"product_cat","style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"body-text"} /-->

	<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

	<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"color":{"text":"#f14b4b"},"elements":{"link":{"color":{"text":"#f14b4b"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
	<!-- /wp:woocommerce/product-template --></div>
	<!-- /wp:woocommerce/product-collection --></div>
	<!-- /wp:group -->
<?php } else { ?>
	<!-- wp:group {"className":"offer-zone","layout":{"type":"constrained","contentSize":"80%"}} -->
	<div class="wp-block-group offer-zone"><!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
	<div class="wp-block-group sec-head"><!-- wp:heading {"textAlign":"center","level":6,"className":"sec-shot-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"30px"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"2px","bottom":"2px"}}},"backgroundColor":"primary","textColor":"white"} -->
	<h6 class="wp-block-heading has-text-align-center sec-shot-heading has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:2px;padding-right:var(--wp--preset--spacing--40);padding-bottom:2px;padding-left:var(--wp--preset--spacing--40);font-size:14px;font-style:normal;font-weight:700"><?php esc_html_e('Offer Zone','art-and-craft'); ?></h6>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:25px;font-style:normal;font-weight:800"><?php esc_html_e('Discover Latest Offer','art-and-craft'); ?></h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->

	<!-- wp:columns {"verticalAlignment":"top","className":"products-wrap wow  slideInUp"} -->
	<div class="wp-block-columns are-vertically-aligned-top products-wrap wow  slideInUp"><!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"product-img-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group product-img-wrap"><!-- wp:image {"id":44,"sizeSlug":"full","linkDestination":"none","className":"main-img","style":{"border":{"radius":"10px"}}} -->
	<figure class="wp-block-image size-full has-custom-border main-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image1.png'); ?>" alt="" class="wp-image-44" style="border-radius:10px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"cart-btn-static","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
	<div class="wp-block-group cart-btn-static has-primary-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px"><!-- wp:image {"id":58,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt="" class="wp-image-58"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"body-text"} -->
	<h6 class="wp-block-heading has-body-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:14px"><?php esc_html_e('Brand Name','art-and-craft'); ?></h6>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-size:18px;font-style:normal;font-weight:700"><?php esc_html_e('Product Name Here 01','art-and-craft'); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#f14b4b"},"elements":{"link":{"color":{"text":"#f14b4b"}}}}} -->
	<p class="has-text-color has-link-color" style="color:#f14b4b;margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:600"><span><?php esc_html_e('$95.00','art-and-craft'); ?></span><?php esc_html_e(' $70.00','art-and-craft'); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"product-img-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group product-img-wrap"><!-- wp:image {"id":44,"sizeSlug":"full","linkDestination":"none","className":"main-img","style":{"border":{"radius":"10px"}}} -->
	<figure class="wp-block-image size-full has-custom-border main-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image2.png'); ?>" alt="" class="wp-image-44" style="border-radius:10px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"cart-btn-static","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
	<div class="wp-block-group cart-btn-static has-primary-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px"><!-- wp:image {"id":58,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt="" class="wp-image-58"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"body-text"} -->
	<h6 class="wp-block-heading has-body-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:14px"><?php esc_html_e('Brand Name','art-and-craft'); ?></h6>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-size:18px;font-style:normal;font-weight:700"><?php esc_html_e('Product Name Here 02','art-and-craft'); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#f14b4b"},"elements":{"link":{"color":{"text":"#f14b4b"}}}}} -->
	<p class="has-text-color has-link-color" style="color:#f14b4b;margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:600"><span><?php esc_html_e('$95.00','art-and-craft'); ?></span><?php esc_html_e(' $70.00','art-and-craft'); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"product-img-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group product-img-wrap"><!-- wp:image {"id":44,"sizeSlug":"full","linkDestination":"none","className":"main-img","style":{"border":{"radius":"10px"}}} -->
	<figure class="wp-block-image size-full has-custom-border main-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image3.png'); ?>" alt="" class="wp-image-44" style="border-radius:10px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"cart-btn-static","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
	<div class="wp-block-group cart-btn-static has-primary-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px"><!-- wp:image {"id":58,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt="" class="wp-image-58"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"body-text"} -->
	<h6 class="wp-block-heading has-body-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:14px"><?php esc_html_e('Brand Name','art-and-craft'); ?></h6>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-size:18px;font-style:normal;font-weight:700"><?php esc_html_e('Product Name Here 03','art-and-craft'); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#f14b4b"},"elements":{"link":{"color":{"text":"#f14b4b"}}}}} -->
	<p class="has-text-color has-link-color" style="color:#f14b4b;margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:600"><span><?php esc_html_e('$95.00','art-and-craft'); ?></span><?php esc_html_e(' $70.00','art-and-craft'); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"product-img-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group product-img-wrap"><!-- wp:image {"id":44,"sizeSlug":"full","linkDestination":"none","className":"main-img","style":{"border":{"radius":"10px"}}} -->
	<figure class="wp-block-image size-full has-custom-border main-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image4.png'); ?>" alt="" class="wp-image-44" style="border-radius:10px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"cart-btn-static","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
	<div class="wp-block-group cart-btn-static has-primary-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px"><!-- wp:image {"id":58,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cart.png'); ?>" alt="" class="wp-image-58"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"body-text"} -->
	<h6 class="wp-block-heading has-body-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:14px"><?php esc_html_e('Brand Name','art-and-craft'); ?></h6>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-size:18px;font-style:normal;font-weight:700"><?php esc_html_e('Product Name Here 04','art-and-craft'); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#f14b4b"},"elements":{"link":{"color":{"text":"#f14b4b"}}}}} -->
	<p class="has-text-color has-link-color" style="color:#f14b4b;margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:600"><span><?php esc_html_e('$95.00','art-and-craft'); ?></span><?php esc_html_e(' $70.00','art-and-craft'); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
<?php } ?>