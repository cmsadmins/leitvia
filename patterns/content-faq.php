<?php
/**
 * Title: Frequently asked questions
 * Slug: leitvia/content-faq
 * Categories: text, about
 * Description: Heading and short intro next to five expandable questions with answers, the first one open. Use to answer common questions before people get in touch.
 * Keywords: faq, questions, answers, accordion, details, help
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"FAQ"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"36%"} -->
		<div class="wp-block-column" style="flex-basis:36%">
			<!-- wp:heading {"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'Questions we hear before most projects', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Something missing here? Send us a short note and we will answer it, usually within a day.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"64%","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column" style="flex-basis:64%">
			<!-- wp:details {"showContent":true,"style":{"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}},"fontSize":"lead","fontFamily":"heading"} -->
			<details class="wp-block-details has-heading-font-family has-lead-font-size" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)" open><summary><?php esc_html_e( 'How long does a typical project take?', 'leitvia' ); ?></summary>
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"body","fontFamily":"body"} -->
				<p class="has-ink-muted-color has-text-color has-body-font-family has-body-font-size"><?php esc_html_e( 'Most relaunches take twelve to sixteen weeks from the first workshop to going live. Smaller projects, such as a new section or a design refresh, usually fit into four to six weeks.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}},"fontSize":"lead","fontFamily":"heading"} -->
			<details class="wp-block-details has-heading-font-family has-lead-font-size" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'Can we keep our existing content?', 'leitvia' ); ?></summary>
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"body","fontFamily":"body"} -->
				<p class="has-ink-muted-color has-text-color has-body-font-family has-body-font-size"><?php esc_html_e( 'Yes. We migrate posts, pages, media and authors, then check redirects so existing links and search rankings keep working.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}},"fontSize":"lead","fontFamily":"heading"} -->
			<details class="wp-block-details has-heading-font-family has-lead-font-size" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'Who will maintain the site after launch?', 'leitvia' ); ?></summary>
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"body","fontFamily":"body"} -->
				<p class="has-ink-muted-color has-text-color has-body-font-family has-body-font-size"><?php esc_html_e( 'Your team edits the content; we take care of updates, backups and monitoring on a monthly plan. You can also host and maintain it yourselves, and we will hand over full documentation.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}},"fontSize":"lead","fontFamily":"heading"} -->
			<details class="wp-block-details has-heading-font-family has-lead-font-size" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'Do you work with organizations outside Europe?', 'leitvia' ); ?></summary>
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"body","fontFamily":"body"} -->
				<p class="has-ink-muted-color has-text-color has-body-font-family has-body-font-size"><?php esc_html_e( 'We do. About a third of our clients are based in North America and Asia. We schedule calls across time zones and do most of the work in writing.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}},"fontSize":"lead","fontFamily":"heading"} -->
			<details class="wp-block-details has-heading-font-family has-lead-font-size" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'What does a project cost?', 'leitvia' ); ?></summary>
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"body","fontFamily":"body"} -->
				<p class="has-ink-muted-color has-text-color has-body-font-family has-body-font-size"><?php esc_html_e( 'Fixed prices start at 18,000 euros for a complete relaunch. After a free first call, you receive a written estimate with every phase listed.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
