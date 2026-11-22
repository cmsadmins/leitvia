<?php
/**
 * Title: Contact buttons
 * Slug: leitvia/cta-contact-buttons
 * Categories: call-to-action, contact
 * Description: Tinted band with a centered heading, one sentence and two buttons that start a phone call and an email. Use as the closing section of a page whose visitors should call or write right away.
 * Keywords: contact, call, phone, email, buttons, get in touch
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Contact buttons"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"heading-l"} -->
	<h2 class="wp-block-heading has-text-align-center has-heading-l-font-size"><?php esc_html_e( 'Call or write, we answer within a working day.', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"ink-muted"} -->
	<p class="has-text-align-center has-ink-muted-color has-text-color"><?php esc_html_e( 'On the phone Monday to Thursday, 9:00 to 17:00. An email reaches us at any time.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="tel:<?php echo esc_attr__( '+442079460958', 'leitvia' ); ?>"><?php esc_html_e( 'Call +44 20 7946 0958', 'leitvia' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:<?php echo esc_attr__( 'hello@example.com', 'leitvia' ); ?>"><?php esc_html_e( 'Write an email', 'leitvia' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
