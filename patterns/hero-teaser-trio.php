<?php
/**
 * Title: Hero with three teasers
 * Slug: leitvia/hero-teaser-trio
 * Categories: banner, featured
 * Description: Page intro as three large picture teasers: heading and lead text in one row above three tall images, each with a number, a linked title and one sentence below. Use on home pages that lead straight into three services, stories or offers instead of one big message.
 * Keywords: hero, teasers, three, services, stories, intro, entry points
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"fontSize":"heading-l"} -->
			<h1 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Three ways we can help.', 'leitvia' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
			<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'A small studio for brands, websites and the care that keeps them working. Pick where you want to start.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of a green arched doorway beneath a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"textColor":"accent"} -->
			<p class="is-style-eyebrow has-accent-color has-text-color" style="margin-top:var(--wp--preset--spacing--s)">01</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size"><a href="#"><?php esc_html_e( 'Brand and identity', 'leitvia' ); ?></a></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Names, logos and type that work from the sign on the door to the smallest icon.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="<?php esc_attr_e( 'Still life of a green block, a terracotta circle and a grey triangle on a shelf', 'leitvia' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"textColor":"accent"} -->
			<p class="is-style-eyebrow has-accent-color has-text-color" style="margin-top:var(--wp--preset--spacing--s)">02</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size"><a href="#"><?php esc_html_e( 'Websites', 'leitvia' ); ?></a></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Sites that load fast, read well and stay easy to change for years.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Overlapping green, terracotta and grey rectangles on a fine paper grid', 'leitvia' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"textColor":"accent"} -->
			<p class="is-style-eyebrow has-accent-color has-text-color" style="margin-top:var(--wp--preset--spacing--s)">03</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size"><a href="#"><?php esc_html_e( 'Care and hosting', 'leitvia' ); ?></a></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Updates, backups and small changes, handled by the people who built the site.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
