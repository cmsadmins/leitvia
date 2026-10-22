<?php
/**
 * Title: Full-width image break
 * Slug: leitvia/content-break-image
 * Categories: media, banner
 * Description: Edge-to-edge image under a dark overlay with one short statement and a supporting line. Use as a pause between text-heavy sections; it counts as a break in the composition rules.
 * Keywords: break, full width, image, cover, statement, pause
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>","dimRatio":70,"isUserOverlayColor":true,"minHeight":60,"minHeightUnit":"vh","metadata":{"name":"Image break","leitviaDecorative":true},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-style-inverse" style="padding-top:var(--wp--preset--spacing--xxl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xxl);padding-left:var(--wp--preset--spacing--m);min-height:60vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"52rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Some things need room. A quiet page gives readers the time to think.', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"lead"} -->
		<p class="has-lead-font-size"><?php esc_html_e( 'We leave space on purpose, so the important parts stand out without shouting.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
