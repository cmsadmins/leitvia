<?php
/**
 * Title: Client logos
 * Slug: leitvia/proof-logos
 * Categories: featured
 * Description: A small label next to a row of five client logos on a tinted band. Use as a quiet pause between larger sections, for example right after the hero.
 * Keywords: logos, clients, customers, partners, trusted by, social proof
 * Viewport Width: 1400
 *
 * The logos are Icon blocks from the leitvia collection (functions.php) and take the
 * text color, ink-muted here, so they follow every palette.
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Client logos"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"className":"is-style-eyebrow","textColor":"ink-muted"} -->
		<h2 class="wp-block-heading is-style-eyebrow has-ink-muted-color has-text-color"><?php esc_html_e( 'Trusted by teams at', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|l"}}},"textColor":"ink-muted","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group has-ink-muted-color has-text-color">
			<!-- wp:icon {"icon":"leitvia/logo-1","style":{"dimensions":{"width":"7.40625rem"}},"ariaLabel":"<?php echo esc_attr__( 'Tervane', 'leitvia' ); ?>"} /-->
			<!-- wp:icon {"icon":"leitvia/logo-2","style":{"dimensions":{"width":"10.6875rem"}},"ariaLabel":"<?php echo esc_attr__( 'Kolmar Works', 'leitvia' ); ?>"} /-->
			<!-- wp:icon {"icon":"leitvia/logo-3","style":{"dimensions":{"width":"10.96875rem"}},"ariaLabel":"<?php echo esc_attr__( 'Brinnel and Co', 'leitvia' ); ?>"} /-->
			<!-- wp:icon {"icon":"leitvia/logo-4","style":{"dimensions":{"width":"7.40625rem"}},"ariaLabel":"<?php echo esc_attr__( 'Halvera', 'leitvia' ); ?>"} /-->
			<!-- wp:icon {"icon":"leitvia/logo-5","style":{"dimensions":{"width":"10.125rem"}},"ariaLabel":"<?php echo esc_attr__( 'Marlow Fenn', 'leitvia' ); ?>"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
