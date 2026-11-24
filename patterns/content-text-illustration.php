<?php
/**
 * Title: Text with illustration
 * Slug: leitvia/content-text-illustration
 * Categories: text, media
 * Description: Heading, two short paragraphs and a link next to a small drawing that is shown whole and never cropped. Use to loosen a text section with a line drawing or a cut-out illustration that only decorates.
 * Keywords: illustration, drawing, line art, decorative, text, motif
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Text with illustration"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'A plant on every desk, because a calm room makes better work.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Small things set the tone of a place. We keep the rooms bright, the desks clear and the meetings short, so there is time left for the work itself.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Visitors notice it within a minute, and most of them stay for a second coffee.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p style="font-weight:600"><a><?php esc_html_e( 'See how we set up our rooms', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
			<!-- wp:image {"aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"className":"is-style-illustration"} -->
			<figure class="wp-block-image size-full is-style-illustration"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustration.svg' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:contain"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
