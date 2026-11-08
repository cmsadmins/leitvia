<?php
/**
 * Title: Author tip
 * Slug: leitvia/content-author-tip
 * Categories: text
 * Description: A short tip in the voice of the author with a large round portrait in an accent ring, a small heart before the eyebrow and the name in italics, on a soft tinted panel. Save it once as a synced pattern with a real portrait and repeat it every three to five sections of a long guide; tip and name can be overridden in every copy.
 * Keywords: tip, author, advice, quote, recurring, voice, synced, override
 * Viewport Width: 800
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Author tip"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:group {"className":"is-style-tip","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group is-style-tip">
		<!-- wp:image {"width":"6rem","height":"6rem","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"style":{"border":{"color":"var:preset|color|accent","radius":"var:preset|border-radius|pill","width":"0.1875rem"},"layout":{"selfStretch":"fixedNoShrink","flexSize":"6rem"}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="" class="has-border-color" style="border-color:var(--wp--preset--color--accent);border-width:0.1875rem;border-radius:var(--wp--preset--border-radius--pill);aspect-ratio:1;object-fit:cover;width:6rem;height:6rem"/></figure>
		<!-- /wp:image -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:icon {"icon":"leitvia/heart","style":{"dimensions":{"width":"1rem"}},"textColor":"accent"} /-->
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"accent","fontSize":"body","fontFamily":"heading"} -->
				<p class="has-accent-color has-text-color has-heading-font-family has-body-font-size" style="font-style:italic"><?php esc_html_e( 'My tip', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:quote -->
			<blockquote class="wp-block-quote">
				<!-- wp:paragraph {"metadata":{"name":"Tip","bindings":{"__default":{"source":"core/pattern-overrides"}}}} -->
				<p><?php esc_html_e( 'Book the first night before you set off. Arriving with a place to sleep makes the rest of the trip feel easy.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</blockquote>
			<!-- /wp:quote -->
			<!-- wp:paragraph {"metadata":{"name":"Name","bindings":{"__default":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontStyle":"italic"}},"fontFamily":"heading"} -->
			<p class="has-heading-font-family" style="font-style:italic"><?php esc_html_e( 'Alex Morgan, author', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
