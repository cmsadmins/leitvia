<?php
/**
 * Title: Hero centered
 * Slug: leitvia/hero-centered
 * Categories: banner, featured
 * Description: Centered page intro with eyebrow, large heading, lead text and two buttons. Use at the top of landing pages.
 * Keywords: hero, intro, headline, landing, call to action
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"48rem","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","textAlign":"center"}},"textColor":"ink-muted","fontSize":"meta"} -->
	<p class="has-text-align-center has-ink-muted-color has-text-color has-meta-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Issue 14 · Autumn', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}},"fontSize":"display"} -->
	<h1 class="wp-block-heading has-text-align-center has-display-font-size"><?php esc_html_e( 'Good work needs time and a clear form.', 'leitvia' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"ink-muted","fontSize":"lead"} -->
	<p class="has-text-align-center has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Essays, projects and notes on building things that last. Published every month.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Read the latest essay', 'leitvia' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'About the studio', 'leitvia' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
