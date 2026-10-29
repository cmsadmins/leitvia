<?php
/**
 * Title: Previous and next
 * Slug: leitvia/content-pager
 * Categories: text
 * Description: Links to the previous and the next page of a series and back to its overview, each under a short label. Use at the end of guides, case studies and catalog entries that readers go through in order.
 * Keywords: previous, next, series, pager, overview, navigation
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"tagName":"nav","metadata":{"name":"Previous and next"},"align":"full","style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained"},"ariaLabel":"<?php echo esc_attr__( 'More in this series', 'leitvia' ); ?>"} -->
<nav class="wp-block-group alignfull has-surface-background-color has-background" aria-label="<?php echo esc_attr__( 'More in this series', 'leitvia' ); ?>" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Previous', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size"><a href="#"><?php esc_html_e( 'Plan the content before the design', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Overview', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size"><a href="#"><?php esc_html_e( 'All chapters of the guide', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Next', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size"><a href="#"><?php esc_html_e( 'Test every page before launch', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</nav>
<!-- /wp:group -->
