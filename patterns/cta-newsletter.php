<?php
/**
 * Title: Newsletter invitation
 * Slug: leitvia/cta-newsletter
 * Categories: call-to-action
 * Description: Framed letter card on a tinted band with an italic heading, a short promise and a subscribe button; connect a newsletter or form plugin in place of the note. Use at the end of articles or on a blog index.
 * Keywords: newsletter, subscribe, email, signup, updates
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Newsletter"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:group {"style":{"border":{"width":"0.0625rem"},"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface","borderColor":"stroke","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-stroke-border-color has-surface-background-color has-background" style="border-width:0.0625rem;padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}},"textColor":"accent"} -->
		<p class="has-text-align-center is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'The monthly letter', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"400","textAlign":"center"}},"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-text-align-center has-heading-l-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e( 'One careful email a month, nothing in between.', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"ink-muted"} -->
		<p class="has-text-align-center has-ink-muted-color has-text-color"><?php esc_html_e( 'Notes on writing for the web, one project we learned from and a single link worth your evening. Leave with one click whenever you like.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"ink-muted","fontSize":"meta"} -->
		<p class="has-text-align-center has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Connect your newsletter or form plugin here.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--m)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Subscribe to the newsletter', 'leitvia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
