<?php
/**
 * Title: Call to action banner
 * Slug: leitvia/cta-banner
 * Categories: call-to-action
 * Description: Full-width accent band with a large heading, a short note and one outline button. Use once near the end of a page to ask for the main action.
 * Keywords: call to action, banner, contact, enquiry, next step
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Call to action"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"accent","textColor":"on-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-on-accent-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"64%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:64%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Taking on two projects for spring', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Make your next website the last big rebuild.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"36%","style":{"spacing":{"blockGap":"var:preset|spacing|l"}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:36%">
			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size"><?php esc_html_e( 'Tell us where things stand today. We reply within two working days with honest questions and a first rough plan.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"on-accent","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-on-accent-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Book an introductory call', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
