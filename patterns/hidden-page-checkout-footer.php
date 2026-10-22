<?php
/**
 * Title: Checkout footer
 * Slug: leitvia/hidden-page-checkout-footer
 * Categories: footer
 * Description: Footer of the checkout without navigation: a quiet note on secure payment and the legal links, nothing that leads away from the order.
 * Keywords: checkout, footer, legal, secure, woocommerce
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Checkout footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"}},"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}}},"backgroundColor":"surface","fontFamily":"ui","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background has-ui-font-family" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xs","left":"var:preset|spacing|m"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
		<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Payments are encrypted. Your data is used only for this order.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Legal', 'leitvia' ); ?>"} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Imprint', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Privacy policy', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Terms', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
