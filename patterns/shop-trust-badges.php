<?php
/**
 * Title: Shop trust badges
 * Slug: leitvia/shop-trust-badges
 * Categories: leitvia-shop
 * Description: Heading above four trust facts with a fine line on top, four across on wide screens: secure checkout, the payment methods as plain text, where orders ship from and how fast support answers. No logos of payment providers or seal issuers. Use on shop pages near the product grid or before the footer.
 * Keywords: shop, trust, secure checkout, payment methods, support, guarantee, woocommerce
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Shop trust badges"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"align":"wide","fontSize":"heading-m"} -->
	<h2 class="wp-block-heading alignwide has-heading-m-font-size"><?php esc_html_e( 'Shop with confidence', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
			<!-- wp:heading {"level":3,"fontSize":"body"} -->
			<h3 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Secure checkout', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Every page of the checkout is encrypted, and we never store card numbers.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
			<!-- wp:heading {"level":3,"fontSize":"body"} -->
			<h3 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Payment methods', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Invoice, SEPA direct debit, credit card, PayPal and Apple Pay.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
			<!-- wp:heading {"level":3,"fontSize":"body"} -->
			<h3 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Ships from Germany', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Packed in our workshop in Leipzig, with recycled packaging only.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
			<!-- wp:heading {"level":3,"fontSize":"body"} -->
			<h3 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Real people in support', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Write to us and get an answer within one working day.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
