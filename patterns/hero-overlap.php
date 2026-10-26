<?php
/**
 * Title: Hero with card over image
 * Slug: leitvia/hero-overlap
 * Categories: banner
 * Description: A large image on the left and a text card on the right that reaches into the image, with eyebrow, heading, lead text and two buttons; on phones the card overlaps the lower edge of the image. Use when a photo should lead but the text must stay on a calm background.
 * Keywords: hero, overlap, card, image, layered, intro, banner
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-overlap","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-overlap">
		<!-- wp:column {"verticalAlignment":"center","width":"66%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"34%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:34%">
			<!-- wp:group {"metadata":{"name":"Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|s"},"border":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--stroke);border-width:0.0625rem;padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
				<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Brand and digital studio', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"fontSize":"heading-l"} -->
				<h1 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Websites built to stay useful for years.', 'leitvia' ); ?></h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Strategy, design and development from one small team, for publishers, schools and independent companies.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--m)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'See selected work', 'leitvia' ); ?></a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Start a project', 'leitvia' ); ?></a></div>
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
