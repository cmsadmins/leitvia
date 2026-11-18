<?php
/**
 * Title: Photo gallery
 * Slug: leitvia/content-gallery
 * Categories: gallery, media, portfolio
 * Description: Heading and a short lead above eight photos in an even grid, all in the same 4:3 frame, four across from tablet width and two on phones. Each photo opens whole in the lightbox. Use for many photos of one service or project; add images up to forty.
 * Keywords: gallery, photos, grid, lightbox, projects, portfolio, work, references
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Photo gallery"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Work from the last two years', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'A selection of finished jobs, from the first sketch to the handover. Select a photo to see it whole.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:gallery {"columns":4,"linkTo":"none","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-4 is-cropped" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of a green arched doorway beneath a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="<?php esc_attr_e( 'Still life of a green block, a terracotta circle and a grey triangle on a shelf', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Overlapping green, terracotta and grey rectangles on a fine paper grid', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of a green arched doorway beneath a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="<?php esc_attr_e( 'Still life of a green block, a terracotta circle and a grey triangle on a shelf', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Overlapping green, terracotta and grey rectangles on a fine paper grid', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
