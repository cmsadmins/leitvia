<?php
/**
 * Title: Menu panel from the right
 * Slug: leitvia/navigation-overlay-panel
 * Categories: navigation
 * Description: The open menu as a panel that slides in from the right edge over the dimmed page, up to 36rem wide and full width on phones, on surface-alt: a close button at the top right, the menu items large in capitals in the ui font, left-aligned, and at the bottom a small site logo with one contact link. The ground takes a surface-extra of the token set through backgroundColor. Use for the template part navigation-overlay of headers with a menu button, such as Header in grid cells or Header minimal.
 * Keywords: menu, overlay, panel, navigation, off-canvas, contact
 * Block Types: core/template-part/navigation-overlay
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Menu panel"},"className":"leitvia-overlay leitvia-overlay-panel","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|m"}}},"backgroundColor":"surface-alt","textColor":"ink","layout":{"type":"default"}} -->
<div class="wp-block-group leitvia-overlay leitvia-overlay-panel has-ink-color has-surface-alt-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group">
		<!-- wp:navigation-overlay-close /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:navigation {"submenuVisibility":"always","overlayMenu":"never","fontFamily":"ui","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php echo esc_attr__( 'Menu', 'leitvia' ); ?>"} /-->
	<!-- wp:group {"metadata":{"name":"Menu footer"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"fontSize":"meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group has-meta-font-size">
		<!-- wp:site-logo {"width":32} /-->
		<!-- wp:paragraph -->
		<p><a><?php esc_html_e( 'Write to us', 'leitvia' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
