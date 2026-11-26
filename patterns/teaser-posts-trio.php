<?php
/**
 * Title: Posts as three teasers
 * Slug: leitvia/teaser-posts-trio
 * Categories: posts, featured
 * Description: Heading and lead text in one row above the three latest posts as tall picture teasers, each with its date, a linked title and a short excerpt, then a button to the archive of the category or tag the query shows. Choose the category or tag in the filters of the query; without one it shows the latest posts and the button leads to the posts page. Use on topic, place or section pages that lead into their newest posts in the look of Hero with three teasers.
 * Keywords: posts, latest, category, tag, teasers, three, more from this category, archive, query
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Posts as three teasers"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'New in this section', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
			<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'The three latest posts on this topic. Everything older waits in the archive.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:query {"queryId":132,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"leitviaAnimation":"stagger","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"aspectRatio":"3/4","sizeSlug":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->
				<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontWeight":"500","fontSize":"0.75rem"}},"textColor":"accent"} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-m"} /-->
				<!-- wp:post-excerpt {"excerptLength":20,"textColor":"ink-muted"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--l)">
			<!-- wp:button {"metadata":{"bindings":{"url":{"source":"leitvia/query-archive"}}},"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'More from this category', 'leitvia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
