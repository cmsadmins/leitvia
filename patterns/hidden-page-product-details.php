<?php
/**
 * Title: Product details
 * Slug: leitvia/hidden-page-product-details
 * Categories: text
 * Description: Below the product summary: the WooCommerce product tabs (description, additional information, reviews and tabs added by plugins), then related products.
 * Keywords: product, details, description, reviews, related products, woocommerce
 * Inserter: no
 *
 * @package Leitvia
 */

/*
 * The Product Details block without inner blocks is the structure of WooCommerce's own single product template: it
 * prints the classic tabs from the woocommerce_product_tabs filter (description, additional information, reviews with
 * the review form, and every tab a plugin adds), keyboard operable through WooCommerce's single product script. The
 * compatibility layer fires woocommerce_share before it and woocommerce_after_single_product_summary after it, which
 * also brings the upsells. Avatars in reviews come from Leitvia Studio (local pictures), never from Gravatar.
 */
?>
<!-- wp:woocommerce/product-details -->
<div class="wp-block-woocommerce-product-details alignwide"></div>
<!-- /wp:woocommerce/product-details -->

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
			<!-- wp:woocommerce/product-button /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:woocommerce/related-products -->
