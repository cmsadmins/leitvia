<?php
/**
 * Title: Offset image pair
 * Slug: leitvia/content-media-pair
 * Categories: media, gallery
 * Description: Heading and short introduction above two images of different size, the smaller one set lower, each with a caption. Use to show two sides of a project, a before and after or a detail next to the whole.
 * Keywords: images, pair, offset, gallery, captions, editorial
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Offset image pair"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'The whole picture and the detail that makes it work', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'A site is judged at two distances: the first glance at a page and the moment someone reads a single line. We design for both.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:3/2;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'The whole: a page seen from a distance, with a clear order of large shapes.', 'leitvia' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxl"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--xxl)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="<?php esc_attr_e( 'Still life of a green block, a terracotta circle and a grey triangle on a shelf', 'leitvia' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'The detail: a few objects, placed with care.', 'leitvia' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
