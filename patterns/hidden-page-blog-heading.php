<?php
/**
 * Title: Blog heading
 * Slug: leitvia/hidden-page-blog-heading
 * Categories: text
 * Description: Page heading with a short lead for the posts index. With a posts page set in the reading settings, its title and excerpt replace the default texts, its featured image and content follow.
 * Keywords: blog, heading, posts, intro
 * Inserter: no
 *
 * @package Leitvia
 */

// A posts page such as "Journal" names the blog. WordPress lists the posts at its address, so the featured image and
// the content of that page show here or are gone; content that only repeats the excerpt stays out. All read when the
// template renders.
$leitvia_posts_page = get_option( 'page_for_posts' ) ? get_post( (int) get_option( 'page_for_posts' ) ) : null;
$leitvia_blog_title = $leitvia_posts_page ? get_the_title( $leitvia_posts_page ) : '';
$leitvia_blog_lead  = $leitvia_posts_page && has_excerpt( $leitvia_posts_page ) ? get_the_excerpt( $leitvia_posts_page ) : '';
$leitvia_blog_intro = '';
if ( $leitvia_posts_page && 'publish' === $leitvia_posts_page->post_status && ! post_password_required( $leitvia_posts_page ) ) {
	$leitvia_blog_image = (int) get_post_thumbnail_id( $leitvia_posts_page );
	if ( $leitvia_blog_image ) {
		$leitvia_blog_intro = sprintf(
			'<!-- wp:image {"id":%1$d,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large">%2$s</figure><!-- /wp:image -->',
			$leitvia_blog_image,
			wp_get_attachment_image( $leitvia_blog_image, 'large', false, array( 'class' => 'wp-image-' . $leitvia_blog_image ) )
		);
	}
	if ( '' === $leitvia_blog_lead || normalize_whitespace( wp_strip_all_tags( $leitvia_posts_page->post_content ) ) !== normalize_whitespace( $leitvia_blog_lead ) ) {
		$leitvia_blog_intro .= $leitvia_posts_page->post_content;
	}
}

?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html( '' !== $leitvia_blog_title ? $leitvia_blog_title : __( 'Latest writing', 'leitvia' ) ); ?></h1>
<!-- /wp:heading -->
<?php if ( '' !== $leitvia_blog_lead || '' === $leitvia_blog_intro ) : ?>
<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php echo esc_html( '' !== $leitvia_blog_lead ? $leitvia_blog_lead : __( 'New essays, projects and notes, newest first.', 'leitvia' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>
<?php echo $leitvia_blog_intro; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Block markup of a page, rendered and escaped by its blocks. ?>
