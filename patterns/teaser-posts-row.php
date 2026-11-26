<?php
/**
 * Title: Posts row with link to all
 * Slug: leitvia/teaser-posts-row
 * Categories: posts
 * Description: Compact row of the four latest posts of one category or tag: heading and a link to the archive in one line above four small cards with image, linked title and date. Choose the category or tag in the filters of the query; without one it shows the latest posts and the link leads to the posts page. Use several in a row on a home page with many sections, places or topics.
 * Keywords: posts, latest, category, tag, row, compact, view all, archive, query
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Posts row with link to all"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:query {"queryId":133,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"heading-m"} -->
			<h2 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'From this section', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"metadata":{"bindings":{"url":{"source":"leitvia/query-archive"}}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View all posts', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-template {"leitviaAnimation":"stagger","style":{"spacing":{"margin":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"aspectRatio":"4/3","sizeSlug":"medium_large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}}} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-s"} /-->
				<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"ink-muted"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
