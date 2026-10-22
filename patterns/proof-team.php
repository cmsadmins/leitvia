<?php
/**
 * Title: Team
 * Slug: leitvia/proof-team
 * Categories: team, about
 * Description: Heading and intro above four people with portrait, name and role in a staggered row, four across on wide screens and two by two on narrower ones, never three and one. Use on about or company pages to introduce the people behind the work.
 * Keywords: team, people, staff, about, studio, portraits
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Team"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|xl"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xxl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent"} -->
			<p class="is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'The studio', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"heading-l"} -->
			<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Four people, no hand-offs between them and you.', 'leitvia' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%">
			<!-- wp:paragraph {"textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'The people in your first call are the people who build your site. Between us we cover strategy, editorial design, engineering and plain-language writing.', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"21rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}}} -->
				<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--xs)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Lea Marwitz', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
				<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Founder and strategy lead', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs","margin":{"top":"var:preset|spacing|xl"}}}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xl)">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}}} -->
				<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--xs)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Daniel Okafor', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
				<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Lead engineer', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-group">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}}} -->
				<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--xs)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Sofie Brandauer', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
				<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Editorial designer', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs","margin":{"top":"var:preset|spacing|xl"}}}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xl)">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}}} -->
				<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--xs)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.webp' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Kenji Arai', 'leitvia' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
				<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'Content and accessibility', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
