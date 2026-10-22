<?php
/**
 * Title: Footer with columns
 * Slug: leitvia/footer-columns
 * Categories: footer
 * Description: Quiet footer below a fine rule with the site title and tagline next to three columns of links under small caps heads, closed by a copyright line and legal links. Use as the standard footer on most sites.
 * Keywords: footer, links, sitemap, copyright, legal
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|xl"},"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:site-title {"level":0,"fontSize":"heading-s","fontFamily":"heading"} /-->
			<!-- wp:site-tagline {"textColor":"ink-muted","fontSize":"meta","fontFamily":"ui"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<!-- wp:group {"tagName":"nav","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"12rem"},"ariaLabel":"<?php echo esc_attr__( 'Footer', 'leitvia' ); ?>"} -->
			<nav aria-label="<?php echo esc_attr__( 'Footer', 'leitvia' ); ?>" class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"className":"is-style-eyebrow","textColor":"ink-muted"} -->
					<h2 class="wp-block-heading is-style-eyebrow has-ink-muted-color has-text-color"><?php esc_html_e( 'Studio', 'leitvia' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"fontFamily":"ui"} -->
					<ul class="wp-block-list has-link-color has-ui-font-family">
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'About the studio', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Team', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Careers', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Contact', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"className":"is-style-eyebrow","textColor":"ink-muted"} -->
					<h2 class="wp-block-heading is-style-eyebrow has-ink-muted-color has-text-color"><?php esc_html_e( 'Work', 'leitvia' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"fontFamily":"ui"} -->
					<ul class="wp-block-list has-link-color has-ui-font-family">
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Selected projects', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Services', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'How we work', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Clients', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"className":"is-style-eyebrow","textColor":"ink-muted"} -->
					<h2 class="wp-block-heading is-style-eyebrow has-ink-muted-color has-text-color"><?php esc_html_e( 'Reading', 'leitvia' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"fontFamily":"ui"} -->
					<ul class="wp-block-list has-link-color has-ui-font-family">
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Journal', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Newsletter', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Talks', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Reading list', 'leitvia' ); ?></a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:group -->
			</nav>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|stroke","width":"0.0625rem"}},"spacing":{"padding":{"top":"var:preset|spacing|m"}}},"fontFamily":"ui","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-ui-font-family" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:0.0625rem;padding-top:var(--wp--preset--spacing--m)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"leitvia/site-meta","args":{"key":"copyright"}}}},"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size">© <?php echo esc_html( wp_date( 'Y' ) ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0,"isLink":false,"textColor":"ink-muted","fontSize":"meta"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"fontSize":"meta","ariaLabel":"<?php echo esc_attr__( 'Legal', 'leitvia' ); ?>"} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Imprint', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Privacy policy', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Accessibility', 'leitvia' ); ?>","url":"#","kind":"custom"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
