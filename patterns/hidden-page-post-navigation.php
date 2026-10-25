<?php
/**
 * Title: Post navigation
 * Slug: leitvia/hidden-page-post-navigation
 * Categories: posts
 * Description: Links to the previous and the next post below a single post, each named with its direction and the post title.
 * Keywords: previous, next, post navigation, pagination
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"tagName":"nav","metadata":{"name":"Post navigation"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"},"ariaLabel":"<?php echo esc_attr__( 'More articles', 'leitvia' ); ?>"} -->
<nav aria-label="<?php echo esc_attr__( 'More articles', 'leitvia' ); ?>" class="wp-block-group">
	<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr__( 'Previous article:', 'leitvia' ); ?>","showTitle":true,"linkLabel":true} /-->
	<!-- wp:post-navigation-link {"label":"<?php echo esc_attr__( 'Next article:', 'leitvia' ); ?>","showTitle":true,"linkLabel":true} /-->
</nav>
<!-- /wp:group -->
