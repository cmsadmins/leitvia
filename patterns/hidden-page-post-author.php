<?php
/**
 * Title: About the author
 * Slug: leitvia/hidden-page-post-author
 * Categories: text
 * Description: Author box below a single post, a calm tinted panel with the medium radius: a heading, the linked name of the author, the biographical info of the profile and, when a plugin names one, a link to how the site works. No avatar, so no request goes to Gravatar.
 * Keywords: author, biography, about the author, byline
 * Inserter: no
 *
 * @package Leitvia
 */

/*
 * A plugin can name a page on how the site works (editorial standards, corrections, sources) through the filter
 * leitvia_editorial_url; the box then links to it. Without such a plugin the link is left out.
 */
$leitvia_editorial_url = (string) apply_filters( 'leitvia_editorial_url', '' );

?>
<!-- wp:group {"tagName":"aside","metadata":{"name":"About the author"},"style":{"border":{"radius":"var:preset|border-radius|m"},"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|xs"}},"backgroundColor":"surface-alt","layout":{"type":"default"},"ariaLabel":"<?php echo esc_attr__( 'About the author', 'leitvia' ); ?>"} -->
<aside aria-label="<?php echo esc_attr__( 'About the author', 'leitvia' ); ?>" class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)">
	<!-- wp:heading {"fontSize":"heading-s"} -->
	<h2 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'About the author', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontWeight":"600"}}} /-->
	<!-- wp:post-author-biography {"textColor":"ink-muted"} /-->
	<?php if ( '' !== $leitvia_editorial_url ) : ?>
	<!-- wp:paragraph -->
	<p><a href="<?php echo esc_url( $leitvia_editorial_url ); ?>"><?php esc_html_e( 'How we work', 'leitvia' ); ?></a></p>
	<!-- /wp:paragraph -->
	<?php endif; ?>
</aside>
<!-- /wp:group -->
