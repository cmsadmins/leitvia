<?php
/**
 * Title: Header in grid cells
 * Slug: leitvia/header-grid
 * Categories: header
 * Description: The header as a table of cells with 1 px lines in the text color: a slim light service row with two groups of links on the left and right, then one link on the left, site logo and title in the wide middle cell and a menu button labelled Menu on the right that opens the navigation overlay at every width. Below 600 px the service row stays on top, link and menu button share the next row and the logo takes a row of its own. Use for agencies, studios and portfolios with a graphic, grid based look.
 * Keywords: header, grid, cells, lines, service row, centered logo, menu button, overlay
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","className":"leitvia-grid-header","backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull leitvia-grid-header has-surface-background-color has-background">
	<!-- wp:group {"metadata":{"name":"Service row"},"className":"leitvia-grid-header__service","fontSize":"meta","layout":{"type":"default"}} -->
	<div class="wp-block-group leitvia-grid-header__service has-meta-font-size">
		<!-- wp:group {"className":"leitvia-grid-header__links","layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group leitvia-grid-header__links">
			<!-- wp:paragraph -->
			<p><a><?php esc_html_e( 'Message', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a><?php esc_html_e( 'Phone', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"leitvia-grid-header__links","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
		<div class="wp-block-group leitvia-grid-header__links">
			<!-- wp:paragraph -->
			<p><a><?php esc_html_e( 'LinkedIn', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"metadata":{"name":"Main row"},"className":"leitvia-grid-header__main","layout":{"type":"default"}} -->
	<div class="wp-block-group leitvia-grid-header__main">
		<!-- wp:paragraph -->
		<p><a><?php esc_html_e( 'Work', 'leitvia' ); ?></a></p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"submenuVisibility":"click","overlayMenu":"always","overlay":"navigation-overlay","hasIcon":false,"overlayBackgroundColor":"surface","overlayTextColor":"ink","layout":{"type":"flex","justifyContent":"right"},"ariaLabel":"<?php echo esc_attr__( 'Main navigation', 'leitvia' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
