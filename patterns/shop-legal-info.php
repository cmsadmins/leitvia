<?php
/**
 * Title: Legal price information
 * Slug: leitvia/shop-legal-info
 * Categories: leitvia-shop
 * Description: The price information German law asks for next to a product price: tax note (incl. VAT), shipping note with a link to the shipping costs, unit price and delivery time, from the blocks of Germanized. Available only while Germanized is active. Use below the price in a product template or a product grid.
 * Keywords: shop, legal, vat, tax, shipping costs, unit price, delivery time, germanized, woocommerce
 * Viewport Width: 600
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Legal price information"},"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}},"textColor":"ink-muted","fontSize":"meta","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-ink-muted-color has-text-color has-meta-font-size">
	<!-- wp:woocommerce-germanized/product-tax-info /-->
	<!-- wp:woocommerce-germanized/product-shipping-costs-info /-->
	<!-- wp:woocommerce-germanized/product-unit-price /-->
	<!-- wp:woocommerce-germanized/product-delivery-time /-->
</div>
<!-- /wp:group -->
