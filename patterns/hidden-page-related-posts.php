<?php
/**
 * Title: Related posts
 * Slug: leitvia/hidden-page-related-posts
 * Categories: posts
 * Description: Up to three other posts from the categories of the current post below a single post, each with linked title and date. Renders nothing when there are none.
 * Keywords: related posts, more articles, same category, query
 * Block Types: core/query
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":true},"namespace":"leitvia/related-posts","metadata":{"name":"Related posts"},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:heading {"fontSize":"heading-s"} -->
	<h2 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Related articles', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:post-template -->
		<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xxs"}}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-bottom:var(--wp--preset--spacing--s)">
			<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"body"} /-->
			<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"ink-muted","fontSize":"meta"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
