<?php
/**
 * Title: Posts with category badges
 * Slug: leitvia/teaser-posts-badge
 * Categories: posts
 * Description: The three latest posts in a grid, each with its category as a badge on the featured image, a linked title, the date and the reading time. Use on product or landing pages to point to recent articles.
 * Keywords: posts, latest, articles, badge, category, query
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Posts with badges"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"align":"wide","fontSize":"heading-m"} -->
	<h2 class="wp-block-heading alignwide has-heading-m-font-size"><?php esc_html_e( 'Notes from the team', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group">
				<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"contentPosition":"top left","isDark":false,"sizeSlug":"large","style":{"dimensions":{"aspectRatio":"4/3"},"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container">
					<!-- wp:post-terms {"term":"category","className":"is-style-badge"} /-->
				</div></div>
				<!-- /wp:cover -->
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"}}},"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"fontSize":"heading-s"} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"textColor":"ink-muted","fontSize":"meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group has-ink-muted-color has-text-color has-meta-font-size">
					<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
					<!-- wp:post-time-to-read {"displayAsRange":false} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
