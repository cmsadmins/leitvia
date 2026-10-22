<?php
/**
 * Title: Services
 * Slug: leitvia/teaser-services
 * Categories: services
 * Description: Heading and lead text above four numbered services, each with a short description and a link to its page, four across on wide screens and two by two on narrower ones, never three and one. Use on a home or company page to show what you offer.
 * Keywords: services, offer, capabilities, what we do, grid
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Services"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'What we can do for your website', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Four services that work on their own or together. Most clients start with an audit and decide on the rest once they see the findings.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"31rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"14rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-s","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-s-font-size"><?php esc_html_e( '01', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Content audits', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'We read every page you have, count what gets used and tell you what to keep, merge or retire.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Learn more about content audits', 'leitvia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-s","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-s-font-size"><?php esc_html_e( '02', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Site structure', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Navigation, page types and URLs planned around the questions your readers arrive with.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Learn more about site structure', 'leitvia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"14rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-s","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-s-font-size"><?php esc_html_e( '03', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Theme development', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'A block theme built on core features, so your editors change layouts without touching code.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Learn more about theme development', 'leitvia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"heading-s","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-heading-s-font-size"><?php esc_html_e( '04', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Editor training', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Half-day sessions for the people who publish, using your own pages instead of a demo site.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Learn more about editor training', 'leitvia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
