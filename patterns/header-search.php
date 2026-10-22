<?php
/**
 * Title: Header with search
 * Slug: leitvia/header-search
 * Categories: header
 * Description: Site logo and title on the left, main navigation and a search field with a labelled button on the right and a fine line below; on small screens the search moves to its own row. Use on sites with many pages, so visitors can search as well as browse.
 * Keywords: header, navigation, menu, search, logo, site title
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
		<!-- wp:navigation {"submenuVisibility":"click","overlay":"navigation-overlay","overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"right"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
		<!-- wp:search {"label":"<?php echo esc_attr__( 'Site search', 'leitvia' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr__( 'Search', 'leitvia' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
