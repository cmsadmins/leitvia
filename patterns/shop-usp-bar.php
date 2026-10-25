<?php
/**
 * Title: Shop benefits bar
 * Slug: leitvia/shop-usp-bar
 * Categories: leitvia-shop
 * Description: A slim ink band with three short shop promises side by side: shipping, returns and payment, each a small heading with one line of detail; payment methods are named as text, never as logos. Use right below a shop hero or above a product grid.
 * Keywords: shop, shipping, returns, payment, benefits, usp, woocommerce
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Shop benefits bar"},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-inverse" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"body"} -->
			<h2 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Free shipping from 50 euros', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"meta"} -->
			<p class="has-meta-font-size"><?php esc_html_e( 'Delivered within Germany in two to four working days.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"body"} -->
			<h2 class="wp-block-heading has-body-font-size"><?php esc_html_e( '30 days to return', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"meta"} -->
			<p class="has-meta-font-size"><?php esc_html_e( 'Send it back unused and get your money back, return label included.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"body"} -->
			<h2 class="wp-block-heading has-body-font-size"><?php esc_html_e( 'Pay the way you like', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"meta"} -->
			<p class="has-meta-font-size"><?php esc_html_e( 'Invoice, SEPA direct debit, credit card or PayPal.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
