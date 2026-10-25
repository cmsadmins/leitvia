<?php
/**
 * Title: Front page
 * Slug: leitvia/teaser-front-page
 * Categories: posts
 * Description: Newspaper front page in three columns under a page heading: the sticky lead story wide with image, desk, headline, excerpt, author and date, beside it four headlines in brief and three more stories with small images. Use as the top of the home page of a news site that marks its lead story as sticky.
 * Keywords: posts, front page, newspaper, news, lead story, sticky, query
 * Block Types: core/query
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Front page"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|s"},"blockGap":{"top":"var:preset|spacing|xxs","left":"var:preset|spacing|m"}},"border":{"bottom":{"color":"var:preset|color|stroke","width":"0.0625rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:0.0625rem;padding-bottom:var(--wp--preset--spacing--s)">
		<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"600"}},"fontSize":"heading-s"} -->
		<h1 class="wp-block-heading has-heading-s-font-size" style="font-weight:600"><?php esc_html_e( 'Today in Ashbury and the valley', 'leitvia' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta","fontFamily":"ui"} -->
		<p class="has-ink-muted-color has-text-color has-ui-font-family has-meta-font-size"><?php esc_html_e( 'Updated through the day by the newsroom', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|m"},"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--m)">
		<!-- wp:column {"width":"56%"} -->
		<div class="wp-block-column" style="flex-basis:56%">
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large"} /-->
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600"}},"textColor":"accent","fontSize":"meta","fontFamily":"ui"} /-->
						<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"700","lineHeight":"1.04"},"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-l"} /-->
						<!-- wp:post-excerpt {"textColor":"ink","fontSize":"lead"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"textColor":"ink-muted","fontSize":"meta","fontFamily":"ui","layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group has-ink-muted-color has-text-color has-ui-font-family has-meta-font-size">
							<!-- wp:post-author-name {"isLink":true} /-->
							<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"22%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"style":{"typography":{"fontWeight":"600"}},"fontSize":"body","fontFamily":"ui"} -->
			<h2 class="wp-block-heading has-ui-font-family has-body-font-size" style="font-weight:600"><?php esc_html_e( 'In brief', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
					<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xxs"}}} -->
					<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600"}},"textColor":"accent","fontSize":"meta","fontFamily":"ui"} /-->
						<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"600","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-s"} /-->
						<!-- wp:post-excerpt {"excerptLength":18,"textColor":"ink-muted","fontSize":"meta"} /-->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"22%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"style":{"typography":{"fontWeight":"600"}},"fontSize":"body","fontFamily":"ui"} -->
			<h2 class="wp-block-heading has-ui-font-family has-body-font-size" style="font-weight:600"><?php esc_html_e( 'More stories', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":4,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}}} -->
					<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}}} -->
					<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--s)">
						<!-- wp:post-featured-image {"aspectRatio":"16/9","sizeSlug":"medium_large"} /-->
						<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"600","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"fontSize":"heading-s"} /-->
						<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
