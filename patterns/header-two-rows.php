<?php
/**
 * Title: Header in two rows
 * Slug: leitvia/header-two-rows
 * Categories: header
 * Description: Site logo and title on the left and a search field on the right on the page ground, below them the main navigation as a dark bar across the full width; only the bar stays at the top of the screen while the page scrolls. Use on portals and magazines with many sections, where the menu needs a row of its own.
 * Keywords: header, navigation, menu, search, logo, two rows, dark bar, portal, magazine
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background">
	<!-- wp:group {"metadata":{"name":"Logo and search"},"align":"full","className":"leitvia-header-top","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull leitvia-header-top" style="padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|m"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":40} /-->
				<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:search {"label":"<?php echo esc_attr__( 'Site search', 'leitvia' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr__( 'Search', 'leitvia' ); ?>"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"metadata":{"name":"Navigation bar"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}},"backgroundColor":"ink","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-ink-background-color has-background" style="padding-top:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:navigation {"submenuVisibility":"click","overlay":"navigation-overlay","overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"left"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
