<?php
/**
 * Title: Page not found
 * Slug: leitvia/hidden-page-404
 * Categories: text
 * Description: Content of the 404 template with heading, explanation, search form and a link to the homepage.
 * Keywords: 404, not found, error, search
 * Inserter: no
 *
 * @package Leitvia
 */

?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Page not found', 'leitvia' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'The page you are looking for does not exist or has moved. Try the search or go back to the homepage.', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_html__( 'Search this site', 'leitvia' ); ?>","buttonText":"<?php echo esc_html__( 'Search', 'leitvia' ); ?>"} /-->
<!-- wp:buttons -->
<div class="wp-block-buttons">
	<!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to homepage', 'leitvia' ); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
