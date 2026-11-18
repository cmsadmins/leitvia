<?php
/**
 * Title: Process steps with images
 * Slug: leitvia/content-steps-images
 * Categories: text, services, media
 * Description: Heading above four numbered steps side by side, each with a small image, a large number in the heading font, a title and one or two sentences; on narrow screens they stack one below the other. Use to show how a job runs in three to five steps when each step has a photo or a drawing, without a long section per step.
 * Keywords: steps, process, how it works, numbered, images, illustrations, workflow
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Steps with images"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"align":"wide","fontSize":"heading-l"} -->
	<h2 class="wp-block-heading alignwide has-heading-l-font-size"><?php esc_html_e( 'How a project runs, in four steps', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"leitviaAnimation":"stagger","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}},"textColor":"accent","fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-accent-color has-text-color has-heading-font-family has-heading-l-font-size" style="margin-top:var(--wp--preset--spacing--m)">01</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Listen', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Two workshops with your team and a review of what you already publish. We leave with a clear list of what matters.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="<?php esc_attr_e( 'Still life of a green block, a terracotta circle and a grey triangle on a shelf', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}},"textColor":"accent","fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-accent-color has-text-color has-heading-font-family has-heading-l-font-size" style="margin-top:var(--wp--preset--spacing--m)">02</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Write', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'A short writing sprint turns that list into real page copy, so the design starts from content rather than placeholders.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Overlapping green, terracotta and grey rectangles on a fine paper grid', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}},"textColor":"accent","fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-accent-color has-text-color has-heading-font-family has-heading-l-font-size" style="margin-top:var(--wp--preset--spacing--m)">03</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Build', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'We design and develop in the browser, sharing a working site every week instead of static mockups.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of a green arched doorway beneath a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}},"textColor":"accent","fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-accent-color has-text-color has-heading-font-family has-heading-l-font-size" style="margin-top:var(--wp--preset--spacing--m)">04</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Launch and care', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'After a careful launch we stay on for updates, training and the small changes every new site needs.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
