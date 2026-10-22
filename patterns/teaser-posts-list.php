<?php
/**
 * Title: Posts list
 * Slug: leitvia/teaser-posts-list
 * Categories: posts
 * Description: Heading above the five latest posts as a ruled list with the date on the left and title and excerpt on the right. Use where text matters more than images, such as a journal or news section.
 * Keywords: posts, list, latest, journal, news, query
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Posts list"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"56rem","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:heading {"fontSize":"heading-l"} -->
	<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'From the journal', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}}} -->
			<!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":{"top":"var:preset|spacing|xxs","left":"var:preset|spacing|l"}}}} -->
			<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%">
					<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"75%","style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-column" style="flex-basis:75%">
					<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-s"} /-->
					<!-- wp:post-excerpt {"excerptLength":30,"textColor":"ink-muted"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
