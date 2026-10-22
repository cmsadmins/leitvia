<?php
/**
 * Title: Blog heading
 * Slug: leitvia/hidden-page-blog-heading
 * Categories: text
 * Description: Page heading with a short lead for the posts index.
 * Keywords: blog, heading, posts, intro
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Latest writing', 'leitvia' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'New essays, projects and notes, newest first.', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
