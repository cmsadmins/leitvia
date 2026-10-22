<?php
/**
 * Title: Process steps
 * Slug: leitvia/content-steps
 * Categories: text, services
 * Description: Heading above four numbered steps, each with a title and a short description, four across on wide screens and two by two on narrower ones, never three and one. Use to explain a process, an onboarding path or how a service works.
 * Keywords: steps, process, how it works, numbered, timeline
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Steps"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"align":"wide","fontSize":"heading-l"} -->
	<h2 class="wp-block-heading alignwide has-heading-l-font-size"><?php esc_html_e( 'How a project runs, in four steps', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"31rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"14rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-m","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-m-font-size">01</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Listen', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Two workshops with your team and a review of what you already publish. We leave with a clear list of what matters.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-m","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-m-font-size">02</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Write', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'A short writing sprint turns that list into real page copy, so the design starts from content rather than placeholders.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"14rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-m","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-m-font-size">03</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Build', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'We design and develop in the browser, sharing a working site every week instead of static mockups.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-m","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-m-font-size">04</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Launch and care', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'After a careful launch we stay on for updates, training and the small changes every new site needs.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
