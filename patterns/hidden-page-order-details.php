<?php
/**
 * Title: Order details
 * Slug: leitvia/hidden-page-order-details
 * Categories: text
 * Description: Order confirmation details: order totals, downloads, billing and shipping address and additional information, each under its own heading.
 * Keywords: order, confirmation, totals, address, downloads, woocommerce
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:woocommerce/order-confirmation-totals-wrapper {"align":"wide"} -->
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Order details', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-downloads-wrapper {"align":"wide"} -->
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Downloads', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:woocommerce/order-confirmation-shipping-wrapper -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Shipping address', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
		<!-- /wp:woocommerce/order-confirmation-shipping-wrapper -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:woocommerce/order-confirmation-billing-wrapper -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Billing address', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
		<!-- /wp:woocommerce/order-confirmation-billing-wrapper -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Additional information', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:woocommerce/order-confirmation-additional-fields /-->
<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

<!-- wp:woocommerce/order-confirmation-additional-information /-->
