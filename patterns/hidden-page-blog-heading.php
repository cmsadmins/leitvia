<?php
/**
 * Title: Blog heading
 * Slug: leitvia/hidden-page-blog-heading
 * Categories: text
 * Description: Page heading with a short lead for the posts index. With a posts page set in the reading settings, its title and excerpt replace the default texts.
 * Keywords: blog, heading, posts, intro
 * Inserter: no
 *
 * @package Leitvia
 */

// A posts page such as "Journal" names the blog; its title and excerpt are read when the template renders.
$leitvia_posts_page = (int) get_option( 'page_for_posts' );
$leitvia_blog_title = $leitvia_posts_page ? get_the_title( $leitvia_posts_page ) : '';
$leitvia_blog_lead  = $leitvia_posts_page && has_excerpt( $leitvia_posts_page ) ? get_the_excerpt( $leitvia_posts_page ) : '';

?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html( '' !== $leitvia_blog_title ? $leitvia_blog_title : __( 'Latest writing', 'leitvia' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php echo esc_html( '' !== $leitvia_blog_lead ? $leitvia_blog_lead : __( 'New essays, projects and notes, newest first.', 'leitvia' ) ); ?></p>
<!-- /wp:paragraph -->
