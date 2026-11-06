<?php
/**
 * Title: Comparison table
 * Slug: leitvia/content-comparison
 * Categories: text, services
 * Description: Eyebrow, heading and short intro above a wide comparison table with a header row of options, one row per feature, a last row linking to each option and a caption with source and date. Use on product and comparison pages when three or four options differ feature by feature.
 * Keywords: comparison, table, options, features, plans, product
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Comparison table"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow"><?php esc_html_e( 'Compare plans', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Find the plan that fits how your team works.', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Every plan has the same core features. They differ in how many people sign in, how long files are kept and how fast we reply.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:table {"align":"wide","className":"is-style-comparison","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<figure class="wp-block-table alignwide is-style-comparison" style="margin-top:var(--wp--preset--spacing--l)"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Feature', 'leitvia' ); ?></th><th><?php esc_html_e( 'Starter', 'leitvia' ); ?></th><th><?php esc_html_e( 'Plus', 'leitvia' ); ?></th><th><?php esc_html_e( 'Team', 'leitvia' ); ?></th></tr></thead><tbody><tr><td><?php esc_html_e( 'People who can sign in', 'leitvia' ); ?></td><td><?php esc_html_e( '1', 'leitvia' ); ?></td><td><?php esc_html_e( 'Up to 5', 'leitvia' ); ?></td><td><?php esc_html_e( 'Unlimited', 'leitvia' ); ?></td></tr><tr><td><?php esc_html_e( 'File history', 'leitvia' ); ?></td><td><?php esc_html_e( '30 days', 'leitvia' ); ?></td><td><?php esc_html_e( '1 year', 'leitvia' ); ?></td><td><?php esc_html_e( 'Unlimited', 'leitvia' ); ?></td></tr><tr><td><?php esc_html_e( 'Support reply', 'leitvia' ); ?></td><td><?php esc_html_e( 'Within 3 working days', 'leitvia' ); ?></td><td><?php esc_html_e( 'Within 1 working day', 'leitvia' ); ?></td><td><?php esc_html_e( 'Within 4 hours', 'leitvia' ); ?></td></tr><tr><td><?php esc_html_e( 'Next step', 'leitvia' ); ?></td><td><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Starter in detail', 'leitvia' ); ?></a></td><td><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Plus in detail', 'leitvia' ); ?></a></td><td><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask about Team', 'leitvia' ); ?></a></td></tr></tbody></table><figcaption class="wp-element-caption"><?php esc_html_e( 'Source: sample product sheet, as of 1 October 2026. Plans, limits and reply times are examples.', 'leitvia' ); ?></figcaption></figure>
	<!-- /wp:table -->
</div>
<!-- /wp:group -->
