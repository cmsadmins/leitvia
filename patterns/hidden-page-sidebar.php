<?php
/**
 * Title: Sidebar
 * Slug: leitvia/hidden-page-sidebar
 * Categories: text
 * Description: Sidebar content with a short about text, the category list and the latest posts.
 * Keywords: sidebar, about, categories, latest posts
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:heading {"fontSize":"lead"} -->
<h2 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'About', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"ink-muted"} -->
<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Essays, projects and notes on building things that last.', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"lead"} -->
<h2 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Categories', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:categories /-->
<!-- wp:heading {"fontSize":"lead"} -->
<h2 class="wp-block-heading has-lead-font-size"><?php esc_html_e( 'Latest posts', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts /-->
