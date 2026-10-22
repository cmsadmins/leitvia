<?php
/**
 * Title: Checkout header
 * Slug: leitvia/hidden-page-checkout-header
 * Categories: header
 * Description: Header of the checkout without navigation: site logo and title, the words Secure checkout and a link back to the cart.
 * Keywords: checkout, header, secure, cart, woocommerce
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Checkout header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}},"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|m"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Secure checkout', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:woocommerce/cart-link {"content":"<?php echo esc_attr__( 'Back to cart', 'leitvia' ); ?>"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
