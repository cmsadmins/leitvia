<?php
/**
 * Title: Hero editorial
 * Slug: leitvia/hero-editorial
 * Categories: banner, text
 * Description: Magazine-style article opening with category and date, a wide headline, a lead paragraph and a byline. Use at the top of long reads and features.
 * Keywords: hero, editorial, magazine, article, headline, byline
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:paragraph {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"ink-muted","fontSize":"meta"} -->
	<p class="alignwide has-ink-muted-color has-text-color has-meta-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Essay · October 14, 2026', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"align":"wide","fontSize":"display"} -->
	<h1 class="wp-block-heading alignwide has-display-font-size"><?php esc_html_e( 'What a river town remembers after the factories go quiet', 'leitvia' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}}} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--l);margin-bottom:var(--wp--preset--spacing--l)"/>
	<!-- /wp:separator -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size"><?php esc_html_e( 'Three generations explain how a place keeps its character once the work that built it has moved on. A report on memory, housing and the stubborn value of old brick.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}}} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p style="font-weight:600"><?php esc_html_e( 'By Hanna Okafor', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Photographs by Tomas Reiner', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( '14 minute read', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
