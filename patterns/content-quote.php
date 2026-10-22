<?php
/**
 * Title: Large quote
 * Slug: leitvia/content-quote
 * Categories: text, testimonials
 * Description: A single large quotation with its source on a tinted background. Use to let a client, reader or author speak in their own words.
 * Keywords: quote, testimonial, citation, statement, review
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Quote"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained","contentSize":"52rem","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:quote {"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"heading-m"} -->
	<blockquote class="wp-block-quote has-heading-m-font-size" style="line-height:1.3">
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'They asked better questions about our readers than we had asked ourselves in ten years. The new site is calmer, faster and, for the first time, easy for the whole newsroom to use.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<cite><?php esc_html_e( 'Miriam Achterberg, Managing Editor, The Harbour Review', 'leitvia' ); ?></cite>
	</blockquote>
	<!-- /wp:quote -->
</div>
<!-- /wp:group -->
