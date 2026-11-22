<?php
/**
 * Title: Text beside video
 * Slug: leitvia/content-video-split
 * Categories: media, text
 * Description: Heading and a short text on the left, a video on the right, and below both a folded transcript and a small note in the reading width. Use when a short video supports a text and neither should push the other down the page.
 * Keywords: video, text, split, transcript, media, accessible
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Text beside video"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'A short look at how the work is done', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'The video shows the three steps that matter most. It plays only when you start it, and the transcript below holds the same content as text.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:video -->
			<figure class="wp-block-video"><figcaption class="wp-element-caption"><?php esc_html_e( 'The process in five steps. Upload the video file here and choose a still of it as the poster.', 'leitvia' ); ?></figcaption></figure>
			<!-- /wp:video -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'Transcript of the video', 'leitvia' ); ?></summary><!-- wp:list {"ordered":true} -->
	<ol class="wp-block-list"><!-- wp:list-item -->
	<li><?php esc_html_e( 'The first scene: what the viewer sees and what the caption says.', 'leitvia' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item -->
	<li><?php esc_html_e( 'The next scene, in the same words as on screen.', 'leitvia' ); ?></li>
	<!-- /wp:list-item --></ol>
	<!-- /wp:list --></details>
	<!-- /wp:details -->
	<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
	<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'A label or the source of the video, such as: AI-generated content, AI voice.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
