<?php
/**
 * Title: Category chips
 * Slug: leitvia/hidden-page-category-chips
 * Categories: posts
 * Description: The categories that have posts as a row of pill links in a named navigation, led by a link to all posts; the current one is marked. Renders nothing while fewer than two categories have posts.
 * Keywords: categories, filter, chips, topics, navigation
 * Inserter: no
 *
 * @package Leitvia
 */

// One category is no choice: without a second one the row would only repeat the archive title.
if ( count( get_categories( array( 'number' => 2 ) ) ) < 2 ) {
	return;
}

?>
<!-- wp:group {"tagName":"nav","metadata":{"name":"Categories"},"align":"wide","layout":{"type":"default"},"ariaLabel":"<?php echo esc_attr__( 'Categories', 'leitvia' ); ?>"} -->
<nav class="wp-block-group alignwide" aria-label="<?php echo esc_attr__( 'Categories', 'leitvia' ); ?>">
	<!-- wp:categories {"className":"is-style-chips"} /-->
</nav>
<!-- /wp:group -->
