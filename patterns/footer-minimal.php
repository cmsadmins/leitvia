<?php
/**
 * Title: Footer minimal
 * Slug: leitvia/footer-minimal
 * Categories: footer
 * Description: A single quiet line below a fine rule with the site title and copyright on the left and a short navigation on the right. Use on blogs, portfolios and small sites.
 * Keywords: footer, minimal, copyright, navigation, simple
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|ink","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--ink);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"leitvia/site-meta","args":{"key":"copyright"}}}},"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size">© <?php echo esc_html( wp_date( 'Y' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Footer', 'leitvia' ); ?>"} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Journal', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Contact', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Imprint', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Privacy policy', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
