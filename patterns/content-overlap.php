<?php
/**
 * Title: Text card over image
 * Slug: leitvia/content-overlap
 * Categories: text, media
 * Description: A tinted text card with heading, paragraph and link whose lower edge overlaps a wide image below it. Use to give one message visual depth without placing text on the picture.
 * Keywords: overlap, card, image, layered, editorial, depth
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Text card over image"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|xxl","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}},"layout":{"selfStretch":"fixed","flexSize":"48rem"}},"backgroundColor":"surface-alt","layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--xxl);padding-left:var(--wp--preset--spacing--l)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Our approach', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Layers of meaning, one clear message.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'A site is more than its pages. Tone, structure and pictures work together, and each of them can be changed without breaking the others. That is how a site stays useful for years instead of months.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p style="font-weight:600"><a href="#"><?php esc_html_e( 'See how we plan a site', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"wide","style":{"spacing":{"margin":{"top":"calc(var(--wp--preset--spacing--xl) * -1)"}}}} -->
	<figure class="wp-block-image alignwide size-full" style="margin-top:calc(var(--wp--preset--spacing--xl) * -1)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Overlapping green, terracotta and grey rectangles on a fine paper grid', 'leitvia' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
