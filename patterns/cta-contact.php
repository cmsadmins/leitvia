<?php
/**
 * Title: Contact details
 * Slug: leitvia/cta-contact
 * Categories: call-to-action, contact
 * Description: Tinted band with a heading and short invitation next to a large, divided list with email, phone and studio address. Use on contact or about pages, or as the closing section of a service page.
 * Keywords: contact, email, phone, address, get in touch
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Contact"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
			<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Contact', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Talk to the people who will do the work.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'No sales team and no ticket queue. Write or call and you reach one of the four of us, usually within a working day.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:list {"className":"is-style-divided","fontSize":"heading-s","fontFamily":"heading"} -->
			<ul class="wp-block-list is-style-divided has-heading-font-family has-heading-s-font-size">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Write to', 'leitvia' ); ?> <a href="mailto:hello@example.com">hello@example.com</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Call', 'leitvia' ); ?> <a href="tel:+442079460958">+44 20 7946 0958</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Visit the studio at 14 Fernhill Yard, London E8 3QD', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Office hours Monday to Thursday, 9:00 to 17:00 UK time.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
