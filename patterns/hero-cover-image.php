<?php
/**
 * Title: Hero cover image
 * Slug: leitvia/hero-cover-image
 * Categories: banner, media
 * Description: Full-width background image with a dark overlay, heading, lead text and a button. Use for strong visual openings on campaign or travel pages.
 * Keywords: hero, cover, background image, banner, full width
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>","dimRatio":70,"isUserOverlayColor":true,"minHeight":70,"minHeightUnit":"vh","contentPosition":"bottom center","metadata":{"name":"Hero","leitviaDecorative":true},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center is-style-inverse" style="padding-top:var(--wp--preset--spacing--xxl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xxl);padding-left:var(--wp--preset--spacing--m);min-height:70vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"46rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":1,"fontSize":"display"} -->
		<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Stories from the places between cities.', 'leitvia' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"lead"} -->
		<p class="has-lead-font-size"><?php esc_html_e( 'A travel journal about small towns, long walks and the people who keep them going.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--l)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Start reading the journal', 'leitvia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
