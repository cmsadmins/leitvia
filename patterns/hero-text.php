<?php
/**
 * Title: Hero text
 * Slug: leitvia/hero-text
 * Categories: banner, featured
 * Description: Page intro without an image at the wide left edge: eyebrow, large heading, lead text and two buttons. Use at the top of a subpage, service or product page that has no photo of its own.
 * Keywords: hero, intro, headline, subpage, text only, call to action
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"48rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"ink-muted","fontSize":"meta"} -->
		<p class="has-ink-muted-color has-text-color has-meta-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Services', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"fontSize":"display"} -->
		<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Furniture repairs that last another twenty years', 'leitvia' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'We restore chairs, tables and cabinets in our own workshop and bring them back within three weeks.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'See the services', 'leitvia' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Ask for a quote', 'leitvia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
