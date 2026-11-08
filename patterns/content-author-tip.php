<?php
/**
 * Title: Author tip
 * Slug: leitvia/content-author-tip
 * Categories: text
 * Description: A short tip in the voice of the author with a round portrait and the name, set apart from the running text. Save it once as a synced pattern with a real portrait and repeat it every three to five sections of a long guide.
 * Keywords: tip, author, advice, quote, recurring, voice
 * Viewport Width: 800
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Author tip"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:group {"className":"is-style-tip","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group is-style-tip">
		<!-- wp:image {"width":"4rem","height":"4rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"style":{"border":{"radius":"var:preset|border-radius|pill"},"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="" style="border-radius:var(--wp--preset--border-radius--pill);aspect-ratio:1;object-fit:cover;width:4rem;height:4rem"/></figure>
		<!-- /wp:image -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'Tip', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:quote -->
			<blockquote class="wp-block-quote">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Book the first night before you set off. Arriving with a place to sleep makes the rest of the trip feel easy.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<cite><?php esc_html_e( 'Alex Morgan, author', 'leitvia' ); ?></cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
