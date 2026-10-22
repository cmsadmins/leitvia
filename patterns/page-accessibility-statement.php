<?php
/**
 * Title: Accessibility statement
 * Slug: leitvia/page-accessibility-statement
 * Categories: text
 * Description: Template for an accessibility statement with the details BITV 2.0 and the European Accessibility Act ask for: scope, compliance status, content that is not accessible, how the statement was prepared, feedback contact and enforcement procedure. Replace every text in square brackets before publishing.
 * Keywords: accessibility, statement, bitv, wcag, en 301 549, barrierefreiheit, legal
 * Block Types: core/post-content
 * Post Types: page
 *
 * @package Leitvia
 */

?>
<!-- wp:paragraph -->
<p><?php esc_html_e( '[Organization name] wants its website to be usable by everyone. This statement applies to [domain, for example www.example.org] and was prepared on [date].', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Compliance status', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'This website is [fully / partially / not] compliant with the requirements of [BITV 2.0 / the European Accessibility Act], which refer to the harmonised standard EN 301 549 and to WCAG 2.1 level AA. [Keep the sentence that applies and delete the others.]', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Content that is not accessible', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'The following content is not yet accessible, for the reasons given:', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
	<!-- wp:list-item -->
	<li><?php esc_html_e( '[Content, for example PDF documents published before 2024]: [reason, for example disproportionate burden or not yet fixed]. [Accessible alternative, for example: send us a message and we will provide the information in another format.]', 'leitvia' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item -->
	<li><?php esc_html_e( '[Content from third parties, for example embedded maps or videos]: [reason]. [Accessible alternative.]', 'leitvia' ); ?></li>
	<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'How this statement was prepared', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'The assessment is based on [a self-assessment / a test by an external testing body, name] carried out on [date]. The statement was last reviewed on [date].', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Feedback and contact', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Have you found a barrier on this website, or do you need content in another format? Please tell us. We will reply within [number] weeks.', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
	<!-- wp:list-item -->
	<li><?php esc_html_e( 'Email: [address]', 'leitvia' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item -->
	<li><?php esc_html_e( 'Phone: [number]', 'leitvia' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item -->
	<li><?php esc_html_e( 'Post: [postal address]', 'leitvia' ); ?></li>
	<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Enforcement procedure', 'leitvia' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'If you are not satisfied with our answer, you can contact [the responsible conciliation body or market surveillance authority, name, address, website]. The procedure is free of charge and you do not need a lawyer.', 'leitvia' ); ?></p>
<!-- /wp:paragraph -->
