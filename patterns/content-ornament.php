<?php
/**
 * Title: Ornament divider
 * Slug: leitvia/content-ornament
 * Categories: media, banner
 * Description: One small decorative drawing centered between two sections, shown whole on the page background with little space above and below. Use to repeat a motif of the brand as a quiet divider, at most twice per page.
 * Keywords: ornament, divider, separator, motif, decorative, illustration
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Ornament divider"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:image {"width":"20rem","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"align":"center","className":"is-style-illustration"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-illustration"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ornament.svg' ) ); ?>" alt="" style="width:20rem;height:auto"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
