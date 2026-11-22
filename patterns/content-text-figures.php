<?php
/**
 * Title: Text beside figures
 * Slug: leitvia/content-text-figures
 * Categories: text, media
 * Description: A longer text with a subheading in a readable column beside two figures that are shown whole with a caption each, and a row of further figures below, also uncropped. Use for a technical section whose plans, diagrams or drawings must be seen complete.
 * Keywords: text, drawing, plan, diagram, figure, technical, uncropped
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Text beside figures"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Figure 1: the structure in section, from the base to the top layer.', 'leitvia' ); ?></figcaption></figure>
			<!-- /wp:image -->
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Overlapping green, terracotta and grey rectangles on a fine paper grid', 'leitvia' ); ?>"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Figure 2: the joint in detail.', 'leitvia' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'How the structure is built up, layer by layer', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'The base carries the load and keeps moisture out. It is checked and levelled before anything else is placed on it, because every later layer follows its line.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'On top of it lies the middle layer, shown in figure 1. It takes up movement, so the surface stays free of cracks when the temperature changes.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
			<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'The joint decides how long it lasts', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Where two parts meet, water finds its way in first. Figure 2 shows how the joint is closed in two steps and why the second seal sits behind the first.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:gallery {"columns":3,"imageCrop":false,"linkTo":"none","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}}} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-3" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="<?php esc_attr_e( 'Still life of a green block, a terracotta circle and a grey triangle on a shelf', 'leitvia' ); ?>"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of a green arched doorway beneath a terracotta sun', 'leitvia' ); ?>"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
