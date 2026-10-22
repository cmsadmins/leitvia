<?php
/**
 * Title: Shop category tiles
 * Slug: leitvia/shop-category-tiles
 * Categories: leitvia-shop
 * Description: Heading above one tile per product category of the shop, three across on wide screens, each with the linked category name and its description. The tiles follow the categories of the shop on their own. Use on a shop home page to lead visitors into the range.
 * Keywords: shop, categories, product categories, tiles, range, woocommerce
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Shop category tiles"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"align":"wide","fontSize":"heading-m"} -->
	<h2 class="wp-block-heading alignwide has-heading-m-font-size"><?php esc_html_e( 'Shop by category', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:terms-query {"termQuery":{"perPage":6,"taxonomy":"product_cat","order":"asc","orderBy":"name","include":[],"hideEmpty":true,"showNested":false,"inherit":false},"align":"wide"} -->
	<div class="wp-block-terms-query alignwide">
		<!-- wp:term-template {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
			<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}},"backgroundColor":"surface-alt"} -->
			<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
				<!-- wp:term-name {"level":3,"isLink":true,"fontSize":"heading-s"} /-->
				<!-- wp:term-description {"textColor":"ink-muted","fontSize":"meta"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:term-template -->
	</div>
	<!-- /wp:terms-query -->
</div>
<!-- /wp:group -->
