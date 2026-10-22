<?php
/**
 * Title: Changelog
 * Slug: leitvia/content-changelog
 * Categories: text
 * Description: Heading and intro above three releases as expandable sections, each titled with version and date and listing its changes, the latest one open. Use on product, download or documentation pages.
 * Keywords: changelog, releases, versions, updates, release notes
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Changelog"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
	<p class="is-style-eyebrow"><?php esc_html_e( 'Changelog', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"heading-m"} -->
	<h2 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'What changed in the last three releases', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"ink-muted"} -->
	<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Every release is tested on the two latest WordPress versions before it ships. Updates install themselves unless you turn that off.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:details {"showContent":true,"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}},"fontSize":"body","fontFamily":"mono"} -->
	<details class="wp-block-details has-mono-font-family has-body-font-size" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)" open><summary><?php esc_html_e( 'Version 2.4.0 · 8 October 2026', 'leitvia' ); ?></summary>
		<!-- wp:list {"fontSize":"body","fontFamily":"body"} -->
		<ul class="wp-block-list has-body-font-family has-body-font-size">
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Added:', 'leitvia' ); ?></strong> <?php esc_html_e( 'database load check for sites with more than 50,000 posts.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Changed:', 'leitvia' ); ?></strong> <?php esc_html_e( 'weekly reports now group findings by page instead of by check.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Fixed:', 'leitvia' ); ?></strong> <?php esc_html_e( 'certificate warnings for domains with an uppercase letter in the name.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</details>
	<!-- /wp:details -->
	<!-- wp:details {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}},"fontSize":"body","fontFamily":"mono"} -->
	<details class="wp-block-details has-mono-font-family has-body-font-size" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)"><summary><?php esc_html_e( 'Version 2.3.2 · 17 September 2026', 'leitvia' ); ?></summary>
		<!-- wp:list {"fontSize":"body","fontFamily":"body"} -->
		<ul class="wp-block-list has-body-font-family has-body-font-size">
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Fixed:', 'leitvia' ); ?></strong> <?php esc_html_e( 'uptime alerts sent twice when two regions failed in the same minute.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Fixed:', 'leitvia' ); ?></strong> <?php esc_html_e( 'report links that opened the dashboard of the wrong site in multisite networks.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</details>
	<!-- /wp:details -->
	<!-- wp:details {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}},"fontSize":"body","fontFamily":"mono"} -->
	<details class="wp-block-details has-mono-font-family has-body-font-size" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)"><summary><?php esc_html_e( 'Version 2.3.0 · 2 September 2026', 'leitvia' ); ?></summary>
		<!-- wp:list {"fontSize":"body","fontFamily":"body"} -->
		<ul class="wp-block-list has-body-font-family has-body-font-size">
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Added:', 'leitvia' ); ?></strong> <?php esc_html_e( 'reports with your own logo for the Agency plan.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Added:', 'leitvia' ); ?></strong> <?php esc_html_e( 'a filter to leave staging domains out of every check.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Changed:', 'leitvia' ); ?></strong> <?php esc_html_e( 'image weight check ignores images below 20 kilobytes.', 'leitvia' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</details>
	<!-- /wp:details -->
	<!-- wp:paragraph -->
	<p><a href="#"><?php esc_html_e( 'Read the full changelog', 'leitvia' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
