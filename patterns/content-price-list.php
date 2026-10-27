<?php
/**
 * Title: Price list
 * Slug: leitvia/content-price-list
 * Categories: text
 * Description: Heading and short explanation above a comparison table of quantities, total prices and unit prices, with a caption and a dated source note. Use when prices depend on volume, for example per site or per seat.
 * Keywords: price list, prices, table, volume, quantity, per unit
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Price list"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"56rem","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:heading {"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'The more sites you add, the less each one costs.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:42%">
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Agency plan prices by number of sites, paid once a year. The price per site drops at each step, and you can move up a step at any time.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:table {"className":"is-style-comparison","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<figure class="wp-block-table is-style-comparison" style="margin-top:var(--wp--preset--spacing--l)"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Sites', 'leitvia' ); ?></th><th><?php esc_html_e( 'Price per year', 'leitvia' ); ?></th><th><?php esc_html_e( 'Price per site', 'leitvia' ); ?></th></tr></thead><tbody><tr><td><?php esc_html_e( '1', 'leitvia' ); ?></td><td><?php esc_html_e( '€108', 'leitvia' ); ?></td><td><?php esc_html_e( '€108.00', 'leitvia' ); ?></td></tr><tr><td><?php esc_html_e( '5', 'leitvia' ); ?></td><td><?php esc_html_e( '€450', 'leitvia' ); ?></td><td><?php esc_html_e( '€90.00', 'leitvia' ); ?></td></tr><tr><td><?php esc_html_e( '10', 'leitvia' ); ?></td><td><?php esc_html_e( '€780', 'leitvia' ); ?></td><td><?php esc_html_e( '€78.00', 'leitvia' ); ?></td></tr><tr><td><?php esc_html_e( '25', 'leitvia' ); ?></td><td><?php esc_html_e( '€1,625', 'leitvia' ); ?></td><td><?php esc_html_e( '€65.00', 'leitvia' ); ?></td></tr><tr><td><?php esc_html_e( '50', 'leitvia' ); ?></td><td><?php esc_html_e( '€2,750', 'leitvia' ); ?></td><td><?php esc_html_e( '€55.00', 'leitvia' ); ?></td></tr></tbody><tfoot><tr><td><?php esc_html_e( 'More than 50', 'leitvia' ); ?></td><td><?php esc_html_e( 'On request', 'leitvia' ); ?></td><td><?php esc_html_e( 'On request', 'leitvia' ); ?></td></tr></tfoot></table><figcaption class="wp-element-caption"><?php esc_html_e( 'Agency plan, prices in euros per year, excluding VAT', 'leitvia' ); ?></figcaption></figure>
	<!-- /wp:table -->
	<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
	<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Source: sample price list, as of 1 October 2026. Prices may change for new contracts; running contracts keep their price until renewal.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
