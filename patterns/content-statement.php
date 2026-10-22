<?php
/**
 * Title: Statement
 * Slug: leitvia/content-statement
 * Categories: text, banner
 * Description: One sentence in display size across the full content width on the accent color, with a short explanation and a link below it. Use once per page to state a principle or a promise; it counts as a break in the composition rules.
 * Keywords: statement, big type, display, manifesto, principle, accent
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Statement"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"accent","textColor":"on-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-on-accent-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:heading {"align":"wide","fontSize":"display"} -->
	<h2 class="wp-block-heading alignwide has-display-font-size"><?php esc_html_e( 'We would rather publish one honest page than ten that only fill space.', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size"><?php esc_html_e( 'Every page we write has a reader and a question in mind. If we cannot name both, the page does not get built.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Read the principles behind our work', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
