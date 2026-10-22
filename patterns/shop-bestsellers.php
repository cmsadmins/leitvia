<?php
/**
 * Title: Bestsellers
 * Slug: leitvia/shop-bestsellers
 * Categories: leitvia-shop
 * Description: Heading, a short line and a link to the shop above the four products that sell best, in a grid with image, name, price and add to cart button. Use on a shop home page to show what other customers choose.
 * Keywords: shop, products, bestsellers, popular, top sellers, grid, woocommerce
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Bestsellers"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"36rem","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'Our customers’ favourites', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'The pieces people order again and again, and give as gifts.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
		<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Browse the whole shop', 'leitvia' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:woocommerce/product-collection {"queryId":12,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit"],"queryContextIncludes":["collection"],"align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"style":{"dimensions":{"aspectRatio":"1/1"}}} -->
			<div class="is-loading"></div>
			<!-- /wp:woocommerce/product-image -->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"heading-s","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-price -->
			<div class="is-loading"></div>
			<!-- /wp:woocommerce/product-price -->
			<!-- wp:woocommerce/product-button /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
