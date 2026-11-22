<?php
/**
 * Title: Default footer
 * Slug: leitvia/hidden-page-footer
 * Categories: footer
 * Description: Footer of the default templates: site title, the copyright line, the legal links the site has and a link to the theme.
 * Keywords: footer, legal, imprint, privacy, copyright
 * Inserter: no
 *
 * Only links that lead somewhere: the privacy policy page of the site, and an imprint and an accessibility statement
 * when a published page has one of their usual slugs. A fresh site shows none of them and no dead link. The copyright
 * line binds to leitvia/site-meta, so it shows the current year also after the footer is saved in the Site Editor.
 *
 * @package Leitvia
 */

$leitvia_page  = static function ( array $slugs ): string {
	foreach ( $slugs as $slug ) {
		$page = get_page_by_path( $slug );
		if ( $page && 'publish' === $page->post_status ) {
			return (string) get_permalink( $page );
		}
	}
	return '';
};
$leitvia_legal = array_filter(
	array(
		__( 'Imprint', 'leitvia' )        => $leitvia_page( array( 'imprint', 'impressum', 'legal-notice' ) ),
		__( 'Privacy policy', 'leitvia' ) => get_privacy_policy_url(),
		__( 'Accessibility', 'leitvia' )  => $leitvia_page( array( 'accessibility', 'accessibility-statement', 'barrierefreiheit', 'erklaerung-zur-barrierefreiheit' ) ),
	)
);
$leitvia_theme = wp_get_theme( 'leitvia' );

?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|ink","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--ink);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
		<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
		<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"leitvia/site-meta","args":{"key":"copyright"}}}},"textColor":"ink-muted","fontSize":"meta"} -->
		<p class="has-ink-muted-color has-text-color has-meta-font-size">© <?php echo esc_html( wp_date( 'Y' ) ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":{"top":"var:preset|spacing|xs","left":"var:preset|spacing|m"}}},"fontFamily":"ui","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide has-ui-font-family" style="padding-top:var(--wp--preset--spacing--s)">
		<?php if ( $leitvia_legal ) : ?>
		<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Legal', 'leitvia' ); ?>"} -->
			<?php foreach ( $leitvia_legal as $leitvia_label => $leitvia_url ) : ?>
			<!-- wp:navigation-link {"label":"<?php echo esc_attr( $leitvia_label ); ?>","url":"<?php echo esc_url( $leitvia_url ); ?>","kind":"custom"} /-->
			<?php endforeach; ?>
		<!-- /wp:navigation -->
		<?php endif; ?>
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
		<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php /* translators: %s: name of the theme, linked to its website. */ printf( esc_html__( 'Theme: %s', 'leitvia' ), '<a href="' . esc_url( $leitvia_theme->get( 'ThemeURI' ) ) . '">' . esc_html( $leitvia_theme->get( 'Name' ) ) . '</a>' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
