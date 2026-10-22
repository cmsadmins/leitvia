<?php
/**
 * Title: Post byline
 * Slug: leitvia/hidden-page-post-byline
 * Categories: text
 * Description: Byline for single posts with linked author, labelled publish and update dates and reading time.
 * Keywords: byline, author, date, updated, reading time
 * Inserter: no
 *
 * @package Leitvia
 */

/*
 * The post date block has no label attribute. A separate "Updated" paragraph would stay visible on posts that were
 * never changed, because core then renders nothing for the modified date. So each label goes into the block's date
 * format as escaped characters and only appears together with its date. The site's date format fills the placeholder.
 */
$leitvia_labelled_date_format = static function ( string $label ): string {
	$parts = array_map(
		static fn( string $part ): string => addcslashes( $part, 'A..Za..z\\' ),
		explode( '%s', $label )
	);
	return (string) wp_json_encode( implode( get_option( 'date_format' ), $parts ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
};

?>
<!-- wp:group {"metadata":{"name":"Byline"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xs","left":"var:preset|spacing|m"}}},"textColor":"ink-muted","fontSize":"meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-ink-muted-color has-text-color has-meta-font-size">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'By', 'post author', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:post-author-name {"isLink":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-date {"format":<?php /* translators: %s: publish date. */ echo $leitvia_labelled_date_format( __( 'Published %s', 'leitvia' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- JSON for the block comment. ?>,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
	<!-- wp:post-date {"format":<?php /* translators: %s: date of the last update. */ echo $leitvia_labelled_date_format( __( 'Updated %s', 'leitvia' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- JSON for the block comment. ?>,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"modified"}}}}} /-->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Reading time', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:post-time-to-read {"displayAsRange":false} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
