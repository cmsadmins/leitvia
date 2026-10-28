<?php
/**
 * Title: Video with transcript
 * Slug: leitvia/content-video
 * Categories: media, text
 * Description: Heading and short introduction above a video with a poster image and a caption, followed by a folded transcript with the text of every scene. Use to explain a process in a short video that stays accessible without sound.
 * Keywords: video, transcript, explainer, media, accessible
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Video with transcript"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"fontSize":"heading-l"} -->
	<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'See how it works in under a minute', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"ink-muted"} -->
	<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'A short video walks through the steps one by one. It has no sound, and the transcript below holds the text of every scene.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:video -->
	<figure class="wp-block-video"><figcaption class="wp-element-caption"><?php esc_html_e( 'The process in five steps. Upload the video file here and choose a still of it as the poster.', 'leitvia' ); ?></figcaption></figure>
	<!-- /wp:video -->
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
</div>
<!-- /wp:group -->
