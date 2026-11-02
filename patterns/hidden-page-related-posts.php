<?php
/**
 * Title: Related posts
 * Slug: leitvia/hidden-page-related-posts
 * Categories: posts
 * Description: Up to three other posts from the categories of the current post below a single post, as cards with featured image, category, linked title, excerpt and date. Renders nothing when there are none.
 * Keywords: related posts, more articles, same category, query
 * Block Types: core/query
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":true},"namespace":"leitvia/related-posts","metadata":{"name":"Related posts"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:heading {"fontSize":"heading-s"} -->
	<h2 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Related articles', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:post-template {"className":"leitvia-post-grid","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
		<!-- wp:group {"className":"leitvia-post-card","layout":{"type":"default"}} -->
		<div class="wp-block-group leitvia-post-card">
			<!-- wp:post-featured-image {"aspectRatio":"16/9","sizeSlug":"medium_large"} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} /-->
				<!-- wp:post-title {"level":3,"isLink":true} /-->
				<!-- wp:post-excerpt {"excerptLength":25} /-->
				<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"ink-muted","fontSize":"meta"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
