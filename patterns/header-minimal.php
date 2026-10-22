<?php
/**
 * Title: Header minimal
 * Slug: leitvia/header-minimal
 * Categories: header
 * Description: Site title on the left and a menu button on the right that always opens the navigation as a full-screen overlay. Use on landing pages where the content should own the first screen.
 * Keywords: header, minimal, landing page, overlay menu, menu button
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
		<!-- wp:navigation {"submenuVisibility":"click","overlayMenu":"always","overlay":"navigation-overlay","overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"right"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
