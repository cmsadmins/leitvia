<?php
/**
 * Title: Line divider
 * Slug: leitvia/content-divider
 * Categories: text
 * Description: One fine line in the accent color of the brand between two sections, on the page background with little space above and below. Use as a quiet divider when the brand has no drawn motif, at most twice per page.
 * Keywords: divider, line, separator, accent, break
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Line divider"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:separator {"backgroundColor":"accent"} -->
	<hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
