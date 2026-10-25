<?php
/**
 * Title: Header masthead
 * Slug: leitvia/header-masthead
 * Categories: header
 * Description: Newspaper masthead with a large centered site logo and the tagline below it, then the main navigation and the search between a heavy and a fine rule. Use for news sites and daily publications with a wide logo.
 * Keywords: header, masthead, newspaper, logo, navigation, search
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"0"},"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--s);padding-bottom:0">
	<!-- wp:site-logo {"width":480,"align":"center"} /-->
	<!-- wp:site-tagline {"style":{"typography":{"textAlign":"center"}},"textColor":"ink-muted","fontSize":"meta","fontFamily":"ui"} /-->
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|ink","width":"0.1875rem"},"bottom":{"color":"var:preset|color|ink","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"},"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--ink);border-top-width:0.1875rem;border-bottom-color:var(--wp--preset--color--ink);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs)">
		<!-- wp:navigation {"submenuVisibility":"click","overlay":"navigation-overlay","overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"left"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
		<!-- wp:search {"label":"<?php echo esc_attr__( 'Search the news', 'leitvia' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr__( 'Search', 'leitvia' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
