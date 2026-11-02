<?php
/**
 * Title: Post card
 * Slug: leitvia/hidden-page-post-card
 * Categories: posts
 * Description: One post in a post grid: 16:9 featured image, category, title, excerpt and date. The title is the one link and covers the whole card; the category links stay their own targets.
 * Keywords: post card, teaser, grid, news, query
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"className":"leitvia-post-card","layout":{"type":"default"}} -->
<div class="wp-block-group leitvia-post-card">
	<!-- wp:post-featured-image {"aspectRatio":"16/9","sizeSlug":"medium_large"} /-->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} /-->
		<!-- wp:post-title {"isLink":true} /-->
		<!-- wp:post-excerpt {"excerptLength":25} /-->
		<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"ink-muted","fontSize":"meta"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
