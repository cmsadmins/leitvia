<?php
/**
 * Title: Featured post
 * Slug: leitvia/teaser-featured-post
 * Categories: posts, featured
 * Description: The sticky post as a wide band with image, category, title, excerpt and a link to the article. Use above a post list; it renders nothing while no post is sticky.
 * Keywords: featured, sticky, highlight, post, lead story, query
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"metadata":{"name":"Featured post"},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull">
	<!-- wp:post-template {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface-alt"} -->
		<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xl"}}}} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
					<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large"} /-->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"42%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
					<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontWeight":"500","fontSize":"0.75rem"}},"textColor":"accent"} /-->
					<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-l"} /-->
					<!-- wp:post-excerpt {"textColor":"ink-muted","fontSize":"lead"} /-->
					<!-- wp:read-more {"content":"<?php esc_attr_e( 'Read article', 'leitvia' ); ?>","style":{"typography":{"fontWeight":"600","textDecoration":"underline"},"spacing":{"margin":{"top":"var:preset|spacing|xs"}}}} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
