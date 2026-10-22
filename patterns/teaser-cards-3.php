<?php
/**
 * Title: Three cards
 * Slug: leitvia/teaser-cards-3
 * Categories: featured
 * Description: Heading above three cards, each with image, label, title, short text and a link. Use to point to case studies, projects or key pages.
 * Keywords: cards, case studies, projects, work, teaser
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Three cards"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Recent work for clients who publish a lot', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|m","left":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface-alt"} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--s)">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/landscape.webp' ) ); ?>" alt="<?php esc_attr_e( 'Illustration of layered green hills below a terracotta sun', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|xs","left":"var:preset|spacing|xs"},"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
				<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Transport', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'A help centre for a regional rail operator', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Four hundred pages of timetable and ticket help, rebuilt as one guide with search that understands station names.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Read the case study on the rail help centre', 'leitvia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|m","left":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface-alt"} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--s)">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/detail.webp' ) ); ?>" alt="<?php esc_attr_e( 'Abstract composition of overlapping terracotta, green and grey panels', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|xs","left":"var:preset|spacing|xs"},"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
				<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Housing', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'An annual report tenants actually open', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Plain language, three clear charts and a print edition for the general assembly, all from the same set of pages.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Read the case study on the housing annual report', 'leitvia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|s","right":"var:preset|spacing|s","bottom":"var:preset|spacing|m","left":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|s"}},"backgroundColor":"surface-alt"} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--s)">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/square.webp' ) ); ?>" alt="<?php esc_attr_e( 'Still life of a green block, a terracotta circle and a grey triangle on a shelf', 'leitvia' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|xs","left":"var:preset|spacing|xs"},"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
				<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Publishing', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Twelve years of a members’ magazine, online', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Every issue since 2014 migrated and tagged, with a new issue template the editors run without outside help.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><a href="#"><?php esc_html_e( 'Read the case study on the magazine archive', 'leitvia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
