<?php
/**
 * Title: Header centered
 * Slug: leitvia/header-centered
 * Categories: header
 * Description: Large centered site title like a magazine masthead, a fine dividing line and the main navigation centered below. Use for publications, journals and personal sites.
 * Keywords: header, masthead, centered, navigation, magazine
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--s)">
	<!-- wp:site-title {"level":0,"style":{"typography":{"textAlign":"center"}},"fontSize":"heading-l","fontFamily":"heading"} /-->
	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:navigation {"submenuVisibility":"click","overlay":"navigation-overlay","overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"center"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
</div>
<!-- /wp:group -->
