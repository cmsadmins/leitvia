<?php
/**
 * Title: Footer mega
 * Slug: leitvia/footer-mega
 * Categories: footer
 * Description: Large dark footer with a brand block of short pitch, trust facts and contact details, four link columns (four across or two by two, never three and one), legal navigation, social links, an empty Language switcher group for the language switcher block of a translation plugin and a back to top link. Use on product and company sites with many pages.
 * Keywords: footer, mega footer, sitemap, contact, legal, social
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","className":"is-style-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-inverse" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"var:preset|spacing|l"}}} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":40} /-->
				<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"heading-m","fontFamily":"heading"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We build and run websites for product teams that need them fast, accessible and easy to change. Independent since 2014 and still owned by the people who do the work.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-divided","fontSize":"meta"} -->
			<ul class="wp-block-list is-style-divided has-meta-font-size">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Hosted on servers in the EU', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( '99.95% uptime over the last twelve months', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Support from the engineers who build it', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"className":"is-style-eyebrow"} -->
				<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Contact', 'leitvia' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"meta"} -->
				<p class="has-meta-font-size"><?php esc_html_e( '14 Fernhill Yard, London E8 3QD, United Kingdom', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"meta"} -->
				<p class="has-meta-font-size"><?php esc_html_e( 'New projects:', 'leitvia' ); ?> <a href="mailto:hello@example.com">hello@example.com</a><br><?php esc_html_e( 'Support:', 'leitvia' ); ?> <a href="mailto:support@example.com">support@example.com</a><br><?php esc_html_e( 'Phone:', 'leitvia' ); ?> <a href="tel:+442079460958">+44 20 7946 0958</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<!-- wp:group {"tagName":"nav","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"21rem"},"ariaLabel":"<?php echo esc_attr__( 'Footer', 'leitvia' ); ?>"} -->
			<nav aria-label="<?php echo esc_attr__( 'Footer', 'leitvia' ); ?>" class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"className":"is-style-eyebrow"} -->
						<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Product', 'leitvia' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:list {"className":"is-style-divided","fontSize":"meta"} -->
						<ul class="wp-block-list is-style-divided has-meta-font-size">
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Overview', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Features', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Pricing', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Integrations', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Changelog', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'System status', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"className":"is-style-eyebrow"} -->
						<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Solutions', 'leitvia' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:list {"className":"is-style-divided","fontSize":"meta"} -->
						<ul class="wp-block-list is-style-divided has-meta-font-size">
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'For agencies', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'For publishers', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'For online shops', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'For the public sector', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"className":"is-style-eyebrow"} -->
						<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Resources', 'leitvia' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:list {"className":"is-style-divided","fontSize":"meta"} -->
						<ul class="wp-block-list is-style-divided has-meta-font-size">
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Documentation', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Guides', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Blog', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Webinars', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Help center', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"className":"is-style-eyebrow"} -->
						<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Company', 'leitvia' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:list {"className":"is-style-divided","fontSize":"meta"} -->
						<ul class="wp-block-list is-style-divided has-meta-font-size">
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'About us', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Careers', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Press', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Partners', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
							<!-- wp:list-item -->
							<li><a href="#"><?php esc_html_e( 'Contact', 'leitvia' ); ?></a></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</nav>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Legal', 'leitvia' ); ?>"} -->
				<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Imprint', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Privacy policy', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Terms of service', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Cancellation policy', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Data processing agreement', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- /wp:navigation -->
			<!-- wp:social-links {"showLabels":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|m"}}}} -->
			<ul class="wp-block-social-links has-visible-labels is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"mastodon"} /-->
				<!-- wp:social-link {"url":"#","service":"bluesky"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"leitvia/site-meta","args":{"key":"copyright"}}}},"fontSize":"meta"} -->
				<p class="has-meta-font-size">© <?php echo esc_html( wp_date( 'Y' ) ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"meta"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"metadata":{"name":"Language switcher"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"fontSize":"meta"} -->
			<p class="has-meta-font-size"><a href="#main"><?php esc_html_e( 'Back to top', 'leitvia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
