<?php
/**
 * Title: Two text columns
 * Slug: leitvia/content-two-columns
 * Categories: text
 * Description: Full-width heading above two columns of running text. Use for an introduction or statement that is too long for a single narrow column.
 * Keywords: text, columns, introduction, statement, about
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Two text columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"align":"wide","fontSize":"heading-l"} -->
	<h2 class="wp-block-heading alignwide has-heading-l-font-size"><?php esc_html_e( 'A small studio that prefers fewer, longer projects over many quick ones.', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}}} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--l);margin-bottom:var(--wp--preset--spacing--l)"/>
	<!-- /wp:separator -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We were founded in 2012 by two editors and a developer who were tired of watching good publications disappear behind slow, fragile websites.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Since then we have worked with museums, foundations, regional newspapers and a handful of companies that care about how they sound. Each client gets the same people from the first workshop to the last bug fix.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We take on six projects a year. That limit is deliberate: it leaves room to read every draft, test on real devices and stay available after launch, when most of the useful questions come up.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'If your next project needs patience more than speed, we would like to hear about it. Tell us what you are planning and we will reply within two working days.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
