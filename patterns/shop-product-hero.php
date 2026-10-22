<?php
/**
 * Title: Shop hero with product
 * Slug: leitvia/shop-product-hero
 * Categories: leitvia-shop, banner
 * Description: Two-column shop intro: eyebrow, heading, lead text and two buttons on the left, the newest product of the shop on the right with its image, name, price and add to cart button. Use as the first section of a shop home page.
 * Keywords: shop, hero, intro, product, featured, new, woocommerce
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Shop hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
			<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Small workshops, made to last', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"fontSize":"display"} -->
			<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Everyday objects you will keep for years.', 'leitvia' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
			<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Stoneware, linen, oak and paper from makers we visit ourselves. Every piece is checked by hand before it leaves our workshop.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--l)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Shop the collection', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Meet the makers', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":1,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit"],"queryContextIncludes":["collection"]} -->
			<div class="wp-block-woocommerce-product-collection">
				<!-- wp:woocommerce/product-template -->
					<!-- wp:woocommerce/product-image {"style":{"dimensions":{"aspectRatio":"4/5"}}} -->
					<div class="is-loading"></div>
					<!-- /wp:woocommerce/product-image -->
					<!-- wp:post-title {"isLink":true,"fontSize":"heading-s","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
					<!-- wp:woocommerce/product-price -->
					<div class="is-loading"></div>
					<!-- /wp:woocommerce/product-price -->
					<!-- wp:woocommerce/product-button /-->
				<!-- /wp:woocommerce/product-template -->
			</div>
			<!-- /wp:woocommerce/product-collection -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
