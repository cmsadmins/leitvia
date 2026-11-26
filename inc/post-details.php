<?php
/**
 * Texts and choices of the single post and the primary category of a post. Its own file, so the patterns of the single
 * post load it where the theme functions are not loaded, as in tests that render the patterns of the theme.
 *
 * @package Leitvia
 */

declare( strict_types=1 );

namespace Leitvia;

defined( 'ABSPATH' ) || exit;

/**
 * The primary category of a post as Yoast SEO (_yoast_wpseo_primary_category) or Rank Math (rank_math_primary_category)
 * stores it, 0 without one or when the post is no longer in it.
 *
 * @param int $post_id Post ID.
 */
function primary_category( int $post_id ): int {
	foreach ( array( '_yoast_wpseo_primary_category', 'rank_math_primary_category' ) as $key ) {
		$primary = (int) get_post_meta( $post_id, $key, true );
		if ( $primary && has_term( $primary, 'category', $post_id ) ) {
			return $primary;
		}
	}
	return 0;
}

/**
 * Texts and choices of the single post: the labels of the publish and update dates in byline and sidebar (%s is the
 * date), the heading of the related posts and where they come from (categories: all categories of the post, primary:
 * its primary category or else its first, tags: its tags), and the aspect ratio of the featured image above the text
 * (auto keeps the ratio of the image). A plugin changes them through the filter leitvia_post_details, as Leitvia
 * Studio does with its setting; a label without %s gets the date after it.
 *
 * @return array{published_label: string, updated_label: string, related_heading: string, related_by: string, image_ratio: string}
 */
function post_details(): array {
	$defaults = array(
		/* translators: %s: publish date. */
		'published_label' => __( 'Published %s', 'leitvia' ),
		/* translators: %s: date of the last update. */
		'updated_label'   => __( 'Updated %s', 'leitvia' ),
		'related_heading' => __( 'Related articles', 'leitvia' ),
		'related_by'      => 'categories',
		'image_ratio'     => '16/9',
	);
	/**
	 * Filters the texts and choices of the single post, see post_details().
	 *
	 * @param array<string, string> $details Values by key.
	 */
	$details = array_map( 'strval', array_intersect_key( array_filter( (array) apply_filters( 'leitvia_post_details', $defaults ), 'is_string' ) + $defaults, $defaults ) );
	foreach ( array( 'published_label', 'updated_label' ) as $key ) {
		$details[ $key ] = 1 === substr_count( $details[ $key ], '%s' ) ? $details[ $key ] : $defaults[ $key ];
	}
	$details['related_by']  = in_array( $details['related_by'], array( 'categories', 'primary', 'tags' ), true ) ? $details['related_by'] : 'categories';
	$details['image_ratio'] = in_array( $details['image_ratio'], array( 'auto', '1', '4/3', '3/2', '16/9', '21/9' ), true ) ? $details['image_ratio'] : '16/9';
	return $details;
}
