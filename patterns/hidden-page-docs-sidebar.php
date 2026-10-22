<?php
/**
 * Title: Documentation sidebar
 * Slug: leitvia/hidden-page-docs-sidebar
 * Categories: text
 * Description: Collapsible documentation menu with a labelled search field and the page tree. Opens beside the content from tablet width on.
 * Keywords: documentation, sidebar, search, pages, menu
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Documentation menu', 'leitvia' ); ?></summary>
	<!-- wp:search {"label":"<?php echo esc_attr__( 'Search documentation', 'leitvia' ); ?>"} /-->
	<!-- wp:group {"tagName":"nav","fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Documentation', 'leitvia' ); ?>"} -->
	<nav aria-label="<?php echo esc_attr__( 'Documentation', 'leitvia' ); ?>" class="wp-block-group has-meta-font-size">
		<!-- wp:page-list {"className":"leitvia-docs-pages"} /-->
	</nav>
	<!-- /wp:group -->
</details>
<!-- /wp:details -->
