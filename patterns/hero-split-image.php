<?php
/**
 * Title: Hero split with image
 * Slug: leitvia/hero-split-image
 * Categories: banner
 * Description: Two-column page intro with heading, lead text and buttons next to a tall image. Use when a picture should carry the first impression.
 * Keywords: hero, intro, image, split, columns, call to action
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
			<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Brand and digital studio', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"fontSize":"display"} -->
			<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Websites built to stay useful for years.', 'leitvia' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
			<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Strategy, design and development from one small team. We work with publishers, schools and independent companies that care about the details.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--l)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'See selected work', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Start a project with us', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of a green arched doorway beneath a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
