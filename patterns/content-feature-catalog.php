<?php
/**
 * Title: Feature catalog
 * Slug: leitvia/content-feature-catalog
 * Categories: text, services
 * Description: A legend of plan badges above two feature groups, each with a large count, a short intro and a grid of items marked with the plan that includes them. Use on product pages to show the full scope of an offer.
 * Keywords: features, catalog, plans, product, checklist, overview
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Feature catalog"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"46rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow"><?php esc_html_e( 'Feature catalog', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Every check the service runs, and the plan that includes it.', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xs","left":"var:preset|spacing|l"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-badge"} -->
				<p class="is-style-badge"><?php esc_html_e( 'Core', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
				<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Included in every plan', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-badge"} -->
				<p class="is-style-badge"><?php esc_html_e( 'Pro', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
				<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Pro and Agency plans only', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|ink","width":"0.0625rem"}},"spacing":{"margin":{"top":"var:preset|spacing|l"},"padding":{"top":"var:preset|spacing|m"},"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide" style="border-top-color:var(--wp--preset--color--ink);border-top-width:0.0625rem;margin-top:var(--wp--preset--spacing--l);padding-top:var(--wp--preset--spacing--m)">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:heading {"level":3,"fontSize":"heading-m"} -->
			<h3 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'Security', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"accent","fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-accent-color has-text-color has-heading-font-family has-heading-l-font-size" style="line-height:1"><?php esc_html_e( '12 checks', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Run every hour against the live site, so a problem shows up before a visitor or a search engine finds it.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"14rem"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Login hardening', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Core', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Spots weak admin accounts and repeated failed logins from the same network.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'File changes', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Core', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Compares core and plugin files with their release and lists every change.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Malware signatures', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Pro', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Scans uploads and themes against a signature list updated twice a day.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Certificate expiry', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Core', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Warns three weeks before the TLS certificate of any domain runs out.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|ink","width":"0.0625rem"}},"spacing":{"margin":{"top":"var:preset|spacing|xl"},"padding":{"top":"var:preset|spacing|m"},"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide" style="border-top-color:var(--wp--preset--color--ink);border-top-width:0.0625rem;margin-top:var(--wp--preset--spacing--xl);padding-top:var(--wp--preset--spacing--m)">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:heading {"level":3,"fontSize":"heading-m"} -->
			<h3 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'Performance', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"accent","fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-accent-color has-text-color has-heading-font-family has-heading-l-font-size" style="line-height:1"><?php esc_html_e( '8 checks', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Measured from three regions on real page loads, with the slowest templates ranked first.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"14rem"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Core Web Vitals', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Core', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Tracks loading, interaction and layout shift for the ten busiest pages.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Image weight', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Core', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Lists images that are larger than they are ever shown on screen.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Database load', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Pro', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Finds slow queries and the plugin that sends them.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
					<!-- wp:heading {"level":4,"fontSize":"lead"} -->
					<h4 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Uptime from three regions', 'leitvia' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"is-style-badge"} -->
					<p class="is-style-badge"><?php esc_html_e( 'Pro', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
					<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Checks the home page every minute and confirms an outage from a second region.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:paragraph -->
		<p><a href="#"><?php esc_html_e( 'See all 20 checks in detail', 'leitvia' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
