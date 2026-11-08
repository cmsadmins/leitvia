<?php
/**
 * Title: Icon tiles
 * Slug: leitvia/teaser-icon-tiles
 * Categories: text, featured
 * Description: Heading and a short intro above four tiles, each with an icon and a title that links to its page; the whole tile is one link. Two across on phones, up to four across on wide screens. Use for a short menu of topics or services, such as the ways to plan a visit.
 * Keywords: tiles, icons, cards, links, topics, services, grid, menu
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Icon tiles"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Plan your visit', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Everything you need before you come, one tap away.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"21rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"className":"is-style-tile","style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface-alt","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group is-style-tile has-surface-alt-background-color has-background">
				<!-- wp:icon {"icon":"core/map-marker","style":{"dimensions":{"width":"2rem"}},"textColor":"accent"} /-->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a href="#"><?php esc_html_e( 'Getting here', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"is-style-tile","style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface-alt","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group is-style-tile has-surface-alt-background-color has-background">
				<!-- wp:icon {"icon":"core/calendar","style":{"dimensions":{"width":"2rem"}},"textColor":"accent"} /-->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a href="#"><?php esc_html_e( 'Opening hours', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"className":"is-style-tile","style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface-alt","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group is-style-tile has-surface-alt-background-color has-background">
				<!-- wp:icon {"icon":"core/people","style":{"dimensions":{"width":"2rem"}},"textColor":"accent"} /-->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a href="#"><?php esc_html_e( 'Guided tours', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"is-style-tile","style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface-alt","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group is-style-tile has-surface-alt-background-color has-background">
				<!-- wp:icon {"icon":"core/envelope","style":{"dimensions":{"width":"2rem"}},"textColor":"accent"} /-->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a href="#"><?php esc_html_e( 'Contact and booking', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
