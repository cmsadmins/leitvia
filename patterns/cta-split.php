<?php
/**
 * Title: Call to action with image
 * Slug: leitvia/cta-split
 * Categories: call-to-action, media
 * Description: Dark section with an image that bleeds to the left edge of the screen and a call to action set low beside it. Use to point to a case study, product or campaign with a strong picture.
 * Keywords: call to action, image, case study, split, media, dark
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Call to action with image"},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-inverse" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignfull are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:58%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Overlapping green, terracotta and grey rectangles on a fine paper grid', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"42%","style":{"spacing":{"padding":{"right":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="padding-right:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m);flex-basis:42%">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"30rem","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php esc_html_e( 'Case study · The Harbour Review', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"fontSize":"heading-l"} -->
				<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'A smaller site, read twice as often.', 'leitvia' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'How a regional magazine cut 1,400 pages down to 300 and rebuilt its archive around the questions readers actually search for.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--m)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Read the Harbour Review case study', 'leitvia' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
