<?php
/**
 * Title: Checkout footer
 * Slug: leitvia/hidden-page-checkout-footer
 * Categories: footer
 * Description: Footer of the checkout without navigation: a quiet note on secure payment and the legal links, nothing that leads away from the order.
 * Keywords: checkout, footer, legal, secure, woocommerce
 * Inserter: no
 *
 * Only links that lead somewhere: the privacy policy page of the site and the terms page of WooCommerce, each when it
 * is set. An imprint has no setting in WordPress and is added in the template part.
 *
 * @package Leitvia
 */

$leitvia_terms = function_exists( 'wc_terms_and_conditions_page_id' ) ? (int) wc_terms_and_conditions_page_id() : 0;
$leitvia_legal = array_filter(
	array(
		__( 'Privacy policy', 'leitvia' ) => get_privacy_policy_url(),
		__( 'Terms', 'leitvia' )          => $leitvia_terms > 0 ? (string) get_permalink( $leitvia_terms ) : '',
	)
);

?>
<!-- wp:group {"metadata":{"name":"Checkout footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"}},"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}}},"backgroundColor":"surface","fontFamily":"ui","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background has-ui-font-family" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xs","left":"var:preset|spacing|m"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
		<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Payments are encrypted. Your data is used only for this order.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<?php if ( $leitvia_legal ) : ?>
		<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Legal', 'leitvia' ); ?>"} -->
			<?php foreach ( $leitvia_legal as $leitvia_label => $leitvia_url ) : ?>
			<!-- wp:navigation-link {"label":"<?php echo esc_attr( $leitvia_label ); ?>","url":"<?php echo esc_url( $leitvia_url ); ?>","kind":"custom"} /-->
			<?php endforeach; ?>
		<!-- /wp:navigation -->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
