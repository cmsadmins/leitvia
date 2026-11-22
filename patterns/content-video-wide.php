<?php
/**
 * Title: Wide video with transcript
 * Slug: leitvia/content-video-wide
 * Categories: media, text
 * Description: Heading and short introduction on the left above a video in the wide width, followed by a folded transcript and a small note in the reading width. Use when the video is the main content of the section and needs room.
 * Keywords: video, wide, transcript, explainer, media, accessible
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Wide video with transcript"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Watch the whole process from start to finish', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Two minutes of video show every step. The transcript below holds the same content as text.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:video {"align":"wide"} -->
	<figure class="wp-block-video alignwide"><figcaption class="wp-element-caption"><?php esc_html_e( 'The process in five steps. Upload the video file here and choose a still of it as the poster.', 'leitvia' ); ?></figcaption></figure>
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
	<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
	<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'A label or the source of the video, such as: AI-generated content, AI voice.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
