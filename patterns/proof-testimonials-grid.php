<?php
/**
 * Title: Testimonials grid
 * Slug: leitvia/proof-testimonials-grid
 * Categories: testimonials
 * Description: Heading with one large and two shorter client quotes on a dark background. Use on landing or service pages to show several voices at once.
 * Keywords: testimonials, quotes, reviews, clients, grid, social proof
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|l"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-inverse" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow"><?php esc_html_e( 'Testimonials', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Clients tend to stay. Here is why.', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|ink-muted","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"}}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--ink-muted);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:quote {"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"heading-m"} -->
				<blockquote class="wp-block-quote has-heading-m-font-size" style="line-height:1.3">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'The brief said redesign. What we got was a site our twelve regional offices now update themselves, in one voice, without a single support ticket in the first quarter.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<cite><strong><?php esc_html_e( 'Ilse Brandt', 'leitvia' ); ?></strong><br><?php esc_html_e( 'Head of Digital, Halvera', 'leitvia' ); ?></cite>
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"42%","style":{"spacing":{"blockGap":"var:preset|spacing|l"}}} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|ink-muted","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"}}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--ink-muted);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:quote -->
				<blockquote class="wp-block-quote">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Clear estimates, honest pushback and a launch on the date they named in the first week.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<cite><strong><?php esc_html_e( 'Tomás Reyes', 'leitvia' ); ?></strong><br><?php esc_html_e( 'Founder, Marlow Fenn', 'leitvia' ); ?></cite>
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|ink-muted","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"}}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--ink-muted);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
				<!-- wp:quote -->
				<blockquote class="wp-block-quote">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Our membership page used to be the slowest on the site. It is now the fastest, and almost twice as many visitors finish the form.', 'leitvia' ); ?></p>
					<!-- /wp:paragraph -->
					<cite><strong><?php esc_html_e( 'Annika Holm', 'leitvia' ); ?></strong><br><?php esc_html_e( 'Membership Manager, Tervane', 'leitvia' ); ?></cite>
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
