<?php
/**
 * Title: Trust strip
 * Slug: leitvia/proof-trust-strip
 * Categories: featured
 * Description: A slim ink band with four to five short facts in a row, each with a decorative check mark. Use right below a hero or above pricing to answer common doubts at a glance.
 * Keywords: trust, facts, guarantee, strip, benefits, social proof
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Trust strip"},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-inverse" style="padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)">
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide">
		<!-- wp:list {"className":"is-style-checklist-row","style":{"typography":{"fontWeight":"600"}},"fontSize":"meta"} -->
		<ul style="font-weight:600" class="wp-block-list is-style-checklist-row has-meta-font-size">
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Tested against WCAG 2.2 AA', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Hosted in the European Union', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Data processing agreement included', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Support answered by developers', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Full ownership of code and content', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
