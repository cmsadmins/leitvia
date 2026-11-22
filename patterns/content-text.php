<?php
/**
 * Title: Text section
 * Slug: leitvia/content-text
 * Categories: text
 * Description: Heading, paragraphs and a subheading in the reading width, without an image. Use for a longer explanation that needs nothing beside it, between sections with images.
 * Keywords: text, prose, reading, explanation, section
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Text section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"fontSize":"heading-l"} -->
	<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'What happens between the first call and the finished work', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Every job starts with a visit. We look at what is there, measure, and ask how the place is used from day to day. Only then do we write an offer, so the price holds and nothing has to be added later.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
	<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Planning before building', 'leitvia' ); ?></h3>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'A plan on paper costs an afternoon, a change on site costs a week. You see every detail as a drawing and agree to it before the first part is made.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
