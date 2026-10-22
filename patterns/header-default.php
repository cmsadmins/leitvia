<?php
/**
 * Title: Header default
 * Slug: leitvia/header-default
 * Categories: header
 * Description: Site logo and title on the left, main navigation on the right and a fine line below; collapses into a menu button on small screens. Use as the standard header on most sites.
 * Keywords: header, navigation, menu, logo, site title
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}},"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"submenuVisibility":"click","overlay":"navigation-overlay","overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"right"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
