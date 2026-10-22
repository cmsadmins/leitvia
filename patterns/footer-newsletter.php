<?php
/**
 * Title: Footer with newsletter
 * Slug: leitvia/footer-newsletter
 * Categories: footer, call-to-action
 * Description: Accent footer that opens with a newsletter row of heading, short promise and subscribe button, then closes with the site title, copyright and a short navigation. Use on blogs and publications that live from subscribers.
 * Keywords: footer, newsletter, subscribe, call to action, copyright
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Footer with newsletter"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|xl"}},"backgroundColor":"accent","textColor":"on-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-on-accent-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e( 'One letter a month, then quiet.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'New essays, one project we learned from and a link worth your evening. Unsubscribe with one click.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"22%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:22%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Subscribe to the letter', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|on-accent","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--on-accent);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"heading-s","fontFamily":"heading"} /-->
			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"leitvia/site-meta","args":{"key":"copyright"}}}},"fontSize":"meta"} -->
			<p class="has-meta-font-size">© <?php echo esc_html( wp_date( 'Y' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Footer', 'leitvia' ); ?>"} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Archive', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Imprint', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Privacy policy', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
