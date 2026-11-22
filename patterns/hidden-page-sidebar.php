<?php
/**
 * Title: Sidebar
 * Slug: leitvia/hidden-page-sidebar
 * Categories: text
 * Description: Sidebar content with a short about text, the category list and the latest posts.
 * Keywords: sidebar, about, categories, latest posts
 * Inserter: no
 *
 * The about text is the tagline of the site; without one the heading stays out too. No sample sentence speaks for the
 * site.
 *
 * @package Leitvia
 */

?>
<?php if ( '' !== get_bloginfo( 'description' ) ) : ?>
<!-- wp:heading {"fontSize":"lead"} -->
<h2 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'About', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:site-tagline {"textColor":"ink-muted"} /-->
<?php endif; ?>
<!-- wp:heading {"fontSize":"lead"} -->
<h2 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Categories', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:categories /-->
<!-- wp:heading {"fontSize":"lead"} -->
<h2 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Latest posts', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts /-->
