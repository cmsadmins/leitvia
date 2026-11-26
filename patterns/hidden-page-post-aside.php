<?php
/**
 * Title: Post sidebar
 * Slug: leitvia/hidden-page-post-aside
 * Categories: text
 * Description: Sidebar of a single post, beside the text on large screens and sticky while it scrolls: what plugins add (such as a table of contents), the author with labelled publish and update dates and the category, then what plugins add at the end (such as the service the post is about).
 * Keywords: sidebar, aside, author, date, category, table of contents
 * Inserter: no
 *
 * @package Leitvia
 */

// post_details(), also where the theme functions are not loaded.
require_once get_template_directory() . '/inc/post-details.php';

/*
 * Plugins hand in block markup through two filters: leitvia_post_aside before the details of the post and
 * leitvia_post_aside_end after them; the template part post-aside holds the blocks of the site at the end (a fact box,
 * an ad slot), empty by default. The template puts this sidebar before the text, so a table of contents in it renders
 * first; on large screens the stylesheet moves it to the right (core--group.css). The details repeat the byline under
 * the title, so they show on large screens only and the byline on small ones (leitvia-wide-only, leitvia-narrow-only).
 * The labels (post_details() of functions.php, filter leitvia_post_details) go into the date formats as in the byline.
 */
$leitvia_aside_date_format = static function ( string $label ): string {
	$parts = array_map(
		static fn( string $part ): string => addcslashes( $part, 'A..Za..z\\' ),
		explode( '%s', $label )
	);
	return (string) wp_json_encode( implode( get_option( 'date_format' ), $parts ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
};

?>
<!-- wp:group {"tagName":"aside","metadata":{"name":"Post sidebar"},"className":"leitvia-post-aside","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"default"},"ariaLabel":"<?php echo esc_attr__( 'About this post', 'leitvia' ); ?>"} -->
<aside aria-label="<?php echo esc_attr__( 'About this post', 'leitvia' ); ?>" class="wp-block-group leitvia-post-aside">
	<?php echo apply_filters( 'leitvia_post_aside', '' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Block markup of plugins, escaped by them. ?>
	<!-- wp:group {"metadata":{"name":"Post details"},"className":"leitvia-wide-only","style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}},"textColor":"ink-muted","fontSize":"meta","layout":{"type":"default"}} -->
	<div class="wp-block-group leitvia-wide-only has-ink-muted-color has-text-color has-meta-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'By', 'post author', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:post-author-name {"isLink":true} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-date {"format":<?php echo $leitvia_aside_date_format( Leitvia\post_details()['published_label'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- JSON for the block comment. ?>,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
		<!-- wp:post-date {"format":<?php echo $leitvia_aside_date_format( Leitvia\post_details()['updated_label'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- JSON for the block comment. ?>,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"modified"}}}}} /-->
		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_attr__( 'Category:', 'leitvia' ); ?> "} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:template-part {"slug":"post-aside"} /-->
	<?php echo apply_filters( 'leitvia_post_aside_end', '' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Block markup of plugins, escaped by them. ?>
</aside>
<!-- /wp:group -->
