<?php
/**
 * Title: Downloads
 * Slug: leitvia/content-downloads
 * Categories: text
 * Description: Heading and short intro above a list of files to download, one per row with a decorative file mark: the link names the file, its format and its size, a sentence below says what is inside. Use on product, service, press or documentation pages that offer documents.
 * Keywords: downloads, files, documents, pdf, brochure, price list, press kit
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Downloads"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:heading {"fontSize":"heading-m"} -->
	<h2 class="wp-block-heading has-heading-m-font-size"><?php esc_html_e( 'Documents to download', 'leitvia' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"ink-muted"} -->
	<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Product sheet, prices and terms in one place. Every link shows the format and size of the file before you open it.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:list {"className":"is-style-download","style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}}} -->
	<ul style="margin-top:var(--wp--preset--spacing--m)" class="wp-block-list is-style-download">
		<!-- wp:list-item -->
		<li><a href="#"><?php esc_html_e( 'Product sheet (PDF, 240 KB)', 'leitvia' ); ?></a> <?php esc_html_e( 'Features, technical data and system requirements on two pages.', 'leitvia' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><a href="#"><?php esc_html_e( 'Price list 2026 (PDF, 180 KB)', 'leitvia' ); ?></a> <?php esc_html_e( 'All plans and services with prices excluding VAT.', 'leitvia' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><a href="#"><?php esc_html_e( 'Terms and conditions (PDF, 96 KB)', 'leitvia' ); ?></a> <?php esc_html_e( 'The terms that apply to every order.', 'leitvia' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><a href="#"><?php esc_html_e( 'Logo package (ZIP, 1.2 MB)', 'leitvia' ); ?></a> <?php esc_html_e( 'Logos in SVG and PNG for light and dark backgrounds.', 'leitvia' ); ?></li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->
</div>
<!-- /wp:group -->
