<?php
/**
 * Title: Testimonial
 * Slug: leitvia/proof-testimonial
 * Categories: testimonials
 * Description: One large client quote with name, role and a round portrait on a dark band that stays dark in every palette. Use once per page to let a single strong voice break up lighter sections.
 * Keywords: testimonial, quote, review, client, feedback, social proof
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-inverse" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Client story', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"width":"4rem","height":"4rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"style":{"border":{"radius":"var:preset|border-radius|pill"}}} -->
			<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="" style="border-radius:var(--wp--preset--border-radius--pill);aspect-ratio:1;object-fit:cover;width:4rem;height:4rem"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:quote {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"heading-l"} -->
			<blockquote class="wp-block-quote has-heading-l-font-size" style="line-height:1.2">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'They talked us out of half the pages we asked for. A year on, enquiries are up by a third and our own team runs the site without calling anyone.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<cite><strong><?php esc_html_e( 'Jonas Edler', 'leitvia' ); ?></strong><br><?php esc_html_e( 'Director of Communications, Kolmar Works', 'leitvia' ); ?></cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
