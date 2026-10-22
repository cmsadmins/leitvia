<?php
/**
 * Title: Asymmetric feature
 * Slug: leitvia/content-asymmetric
 * Categories: text, media
 * Description: Two thirds of text with a large heading next to a portrait image that sits lower than the text, with a caption. Use to tell one idea at length with a picture that keeps the page from feeling boxed in.
 * Keywords: asymmetric, editorial, magazine, feature, image, offset
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Asymmetric feature"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Field notes', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'A good page reads like a conversation, not like a brochure.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size"><?php esc_html_e( 'Readers arrive with a question. The page that answers it first, in plain words and in the order they would ask, earns the next minute of their attention.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'We sketch that conversation before any layout exists. Every section gets one job, a heading that states it and the shortest text that does it. What does not answer a question moves further down or leaves the page.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'The result is calmer to read and easier to keep up to date, because each part has a reason to be there.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxl"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--xxl)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of a green arched doorway beneath a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Plenty of space around few elements: the same idea works on a page.', 'leitvia' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
