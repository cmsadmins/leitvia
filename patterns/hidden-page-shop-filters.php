<?php
/**
 * Title: Shop filters
 * Slug: leitvia/hidden-page-shop-filters
 * Categories: text
 * Description: WooCommerce product filters for the shop and its archives: active filters with a clear button, price, category and availability.
 * Keywords: filters, shop, price, category, availability, woocommerce
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:woocommerce/product-filters -->
<div class="wp-block-woocommerce-product-filters wc-block-product-filters">
	<!-- wp:heading {"fontSize":"heading-s"} -->
	<h2 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Filters', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/product-filter-active -->
	<div class="wp-block-woocommerce-product-filter-active">
		<!-- wp:woocommerce/product-filter-removable-chips -->
		<div class="wp-block-woocommerce-product-filter-removable-chips wc-block-product-filter-removable-chips"></div>
		<!-- /wp:woocommerce/product-filter-removable-chips -->

		<!-- wp:woocommerce/product-filter-clear-button -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"wc-block-product-filter-clear-button is-style-outline"} -->
			<div class="wp-block-button wc-block-product-filter-clear-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Clear filters', 'leitvia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- /wp:woocommerce/product-filter-clear-button -->
	</div>
	<!-- /wp:woocommerce/product-filter-active -->

	<!-- wp:woocommerce/product-filter-price -->
	<div class="wp-block-woocommerce-product-filter-price">
		<!-- wp:heading {"level":3,"fontSize":"body"} -->
		<h3 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Price', 'leitvia' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-price-slider -->
		<div class="wp-block-woocommerce-product-filter-price-slider wc-block-product-filter-price-slider"></div>
		<!-- /wp:woocommerce/product-filter-price-slider -->
	</div>
	<!-- /wp:woocommerce/product-filter-price -->

	<!-- wp:woocommerce/product-filter-taxonomy -->
	<div class="wp-block-woocommerce-product-filter-taxonomy">
		<!-- wp:heading {"level":3,"fontSize":"body"} -->
		<h3 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Category', 'leitvia' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-checkbox-list -->
		<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
		<!-- /wp:woocommerce/product-filter-checkbox-list -->
	</div>
	<!-- /wp:woocommerce/product-filter-taxonomy -->

	<!-- wp:woocommerce/product-filter-status -->
	<div class="wp-block-woocommerce-product-filter-status">
		<!-- wp:heading {"level":3,"fontSize":"body"} -->
		<h3 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Availability', 'leitvia' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-checkbox-list -->
		<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
		<!-- /wp:woocommerce/product-filter-checkbox-list -->
	</div>
	<!-- /wp:woocommerce/product-filter-status -->
</div>
<!-- /wp:woocommerce/product-filters -->
