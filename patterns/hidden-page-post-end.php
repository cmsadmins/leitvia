<?php
/**
 * Title: Post end
 * Slug: leitvia/hidden-page-post-end
 * Categories: text
 * Description: What plugins add at the end of a single post, above the author box, such as the service the post is about on small screens. Empty without such a plugin.
 * Keywords: post end, service, related
 * Inserter: no
 *
 * @package Leitvia
 */

// Block markup of plugins through the filter leitvia_post_end; the sidebar (hidden-page-post-aside) has its own filters.
echo apply_filters( 'leitvia_post_end', '' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Block markup of plugins, escaped by them.
