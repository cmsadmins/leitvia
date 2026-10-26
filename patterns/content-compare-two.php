<?php
/**
 * Title: Compare two options
 * Slug: leitvia/content-compare-two
 * Categories: text, services
 * Description: Two cards side by side, each with a label, heading, check list and footnote, the right one on an ink background and marked as recommended. Use to explain two modes or editions of a product.
 * Keywords: compare, options, modes, editions, recommended, product
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Compare two"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Two ways to run it. The same checks either way.', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Install the plugin and keep the controls yourself, or let our team watch the reports and act on them for you.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"border":{"width":"0.0625rem"},"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}},"borderColor":"stroke"} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:0.0625rem;padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-badge"} -->
				<p class="is-style-badge"><?php esc_html_e( 'Self-managed', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"fontSize":"heading-m"} -->
			<h3 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'You act on the reports', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'The plugin runs every check on your server and sends a weekly summary to the people you choose.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-checklist"} -->
			<ul class="wp-block-list is-style-checklist">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'All checks of your plan, run on your own server', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Weekly report by email and in the dashboard', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Fixes applied by your team when it suits you', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Community forum for questions', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Needs WordPress 7.0 and PHP 8.2 or later.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}}} -->
		<div class="wp-block-group is-style-inverse" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-badge"} -->
				<p class="is-style-badge"><?php esc_html_e( 'Managed', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php esc_html_e( 'Recommended', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"fontSize":"heading-m"} -->
			<h3 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'We act on the reports', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Our team reviews every alert within one working day, applies safe fixes and tells you what changed and why.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-checklist"} -->
			<ul class="wp-block-list is-style-checklist">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Everything in self-managed', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Alerts reviewed by a developer, not a script', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Safe fixes applied with a backup taken first', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Monthly call to go through open findings', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"fontSize":"meta"} -->
			<p class="has-meta-font-size"><?php esc_html_e( 'Available for the Pro and Agency plans.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
