<?php
/**
 * Title: Header for shops
 * Slug: leitvia/header-shop
 * Categories: header
 * Description: Site logo and title on the left, main navigation, a product search, the customer account link and the mini cart on the right and a fine line below; on small screens the search moves to its own row. Use as the header of WooCommerce shop pages.
 * Keywords: header, shop, store, cart, mini cart, account, product search, woocommerce
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}},"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|m"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"submenuVisibility":"click","overlay":"navigation-overlay","overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"right"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
			<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->
			<!-- wp:woocommerce/mini-cart /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:search {"label":"<?php echo esc_attr__( 'Search products', 'leitvia' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr__( 'Search', 'leitvia' ); ?>","buttonUseIcon":true,"query":{"post_type":"product"},"namespace":"woocommerce/product-search"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
