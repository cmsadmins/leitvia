<?php
/**
 * Title: Footer in grid cells
 * Slug: leitvia/footer-grid
 * Categories: footer
 * Description: One row of equal cells with 1 px lines in the text color, each a link in small capitals (contact, work, privacy policy, imprint and the cookie settings when a consent tool is active), and the copyright line below. Below 600 px the cells form two columns. Use with Header in grid cells for agencies, studios and portfolios with a graphic, grid based look.
 * Keywords: footer, grid, cells, lines, legal links, imprint, privacy
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 *
 * Render-time by design. wp_date() writes the year of the copyright line when the pattern is inserted, and the
 * binding to leitvia/site-meta (key copyright) shows the current year on every view, also after the footer is saved.
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","className":"leitvia-grid-footer","backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull leitvia-grid-footer has-surface-background-color has-background">
	<!-- wp:navigation {"overlayMenu":"never","fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Footer', 'leitvia' ); ?>"} -->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Contact', 'leitvia' ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Work', 'leitvia' ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Privacy policy', 'leitvia' ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Imprint', 'leitvia' ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Cookie settings', 'leitvia' ); ?>","url":"#leitvia-consent","kind":"custom","className":"leitvia-consent-link"} /-->
	<!-- /wp:navigation -->
	<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"leitvia/site-meta","args":{"key":"copyright"}}}},"textColor":"ink-muted","fontSize":"meta"} -->
	<p class="has-ink-muted-color has-text-color has-meta-font-size">© <?php echo esc_html( wp_date( 'Y' ) ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
