<?php
/**
 * Title: Product details
 * Slug: leitvia/hidden-page-product-details
 * Categories: text
 * Description: Below the product summary: the WooCommerce product tabs (description, additional information, reviews and tabs added by plugins), then upsells and related products with image, title and price, without a buy button.
 * Keywords: product, details, description, reviews, related products, woocommerce
 * Inserter: no
 *
 * @package Leitvia
 */

/*
 * The Product Details block without inner blocks is the structure of WooCommerce's own single product template: it
 * prints the classic tabs from the woocommerce_product_tabs filter (description, additional information, reviews with
 * the review form, and every tab a plugin adds), keyboard operable through WooCommerce's single product script. The
 * compatibility layer fires woocommerce_share before it and woocommerce_after_single_product_summary after it. The
 * upsells of the product follow as a product collection in the grid of the related products: four columns, two from
 * 150 px per card on phones, eight at most, nothing without upsells; the classic upsell list of that action leaves
 * (functions.php, upsells_as_block()). Avatars in reviews come from Leitvia Studio (local pictures), never from Gravatar.
 */
?>
<!-- wp:woocommerce/product-details -->
<div class="wp-block-woocommerce-product-details alignwide"></div>
<!-- /wp:woocommerce/product-details -->

<!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"post__in","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/upsells","hideControls":["inherit","order"],"queryContextIncludes":["collection"],"align":"wide"} -->
<div class="wp-block-woocommerce-product-collection alignwide">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'You may also like', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-image {"style":{"dimensions":{"aspectRatio":"1/1"}}} -->
		<div class="is-loading"></div>
		<!-- /wp:woocommerce/product-image -->
		<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"heading-s","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
		<!-- wp:woocommerce/product-price -->
		<div class="is-loading"></div>
		<!-- /wp:woocommerce/product-price -->
	<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide">
	<!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
	<div class="wp-block-query">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'Related products', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
			<!-- wp:woocommerce/product-image {"style":{"dimensions":{"aspectRatio":"1/1"}}} -->
			<div class="is-loading"></div>
			<!-- /wp:woocommerce/product-image -->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"heading-s","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
			<!-- wp:woocommerce/product-price -->
			<div class="is-loading"></div>
			<!-- /wp:woocommerce/product-price -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:woocommerce/related-products -->
