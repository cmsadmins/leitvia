<?php
/**
 * Title: Service cards with pictogram
 * Slug: leitvia/teaser-pictogram-list
 * Categories: text, featured
 * Description: Heading and a short intro above four cards, each with a small pictogram or drawing on the left, shown whole, and a linked title with one sentence on the right. Two across on wide screens, a compact list on phones. Use for services or topics that have a pictogram and a page each.
 * Keywords: services, pictogram, drawing, cards, list, icons, links
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Service cards with pictogram"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'What we do for you', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"lead"} -->
		<p class="has-ink-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Four services from one workshop, each with a page of its own.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"leitviaAnimation":"stagger","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"21rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}},"backgroundColor":"surface-alt","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
			<!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"className":"is-style-illustration","style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
			<figure class="wp-block-image size-full is-resized is-style-illustration"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustration.svg' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:contain;width:4rem;height:auto"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a><?php esc_html_e( 'Planning', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'A plan with every measure and a fixed price before any work starts.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}},"backgroundColor":"surface-alt","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
			<!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"className":"is-style-illustration","style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
			<figure class="wp-block-image size-full is-resized is-style-illustration"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustration.svg' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:contain;width:4rem;height:auto"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a><?php esc_html_e( 'Building', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Made in our own workshop and fitted by the people who built it.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}},"backgroundColor":"surface-alt","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
			<!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"className":"is-style-illustration","style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
			<figure class="wp-block-image size-full is-resized is-style-illustration"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustration.svg' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:contain;width:4rem;height:auto"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a><?php esc_html_e( 'Repair', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'Worn or damaged parts restored, so the piece stays in use.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|s"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|m"}},"backgroundColor":"surface-alt","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group has-surface-alt-background-color has-background" style="border-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
			<!-- wp:image {"width":"4rem","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","metadata":{"leitviaDecorative":true},"className":"is-style-illustration","style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"4rem"}}} -->
			<figure class="wp-block-image size-full is-resized is-style-illustration"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustration.svg' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:contain;width:4rem;height:auto"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
				<h3 class="wp-block-heading has-heading-s-font-size"><a><?php esc_html_e( 'Care', 'leitvia' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink-muted"} -->
				<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'A yearly check that finds small faults before they grow.', 'leitvia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
