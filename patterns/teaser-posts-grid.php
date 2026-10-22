<?php
/**
 * Title: Posts grid
 * Slug: leitvia/teaser-posts-grid
 * Categories: posts
 * Description: Heading above the six latest posts in three columns, each with image, category, title, short excerpt and date. Use on a home or landing page to point readers to recent writing.
 * Keywords: posts, latest, articles, grid, blog, query
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Posts grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"align":"wide","fontSize":"heading-l"} -->
	<h2 class="wp-block-heading alignwide has-heading-l-font-size"><?php esc_html_e( 'Latest articles', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->
				<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontWeight":"500","fontSize":"0.75rem"}},"textColor":"accent"} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-s"} /-->
				<!-- wp:post-excerpt {"excerptLength":20,"textColor":"ink-muted"} /-->
				<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
