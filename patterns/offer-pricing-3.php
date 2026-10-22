<?php
/**
 * Title: Pricing, three plans
 * Slug: leitvia/offer-pricing-3
 * Categories: call-to-action, services
 * Description: Three static plan cards with price, billing period, check list and button, the middle plan framed in the accent color and marked as most popular, with a VAT note above and a note on terms below. Use on pricing and product pages.
 * Keywords: pricing, plans, prices, tiers, subscription, offer
 * Viewport Width: 1400
 *
 * @package Leitvia
 */

?>
<!-- wp:group {"metadata":{"name":"Pricing"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"52rem","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'Pricing', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"heading-l"} -->
		<h2 class="wp-block-heading has-text-align-center has-heading-l-font-size"><?php esc_html_e( 'Three monthly plans, the scope of each in writing.', 'leitvia' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"ink-muted"} -->
		<p class="has-text-align-center has-ink-muted-color has-text-color"><?php esc_html_e( 'Prices in euros per month, billed yearly, excluding VAT.', 'leitvia' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|m"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--l)">
		<!-- wp:group {"style":{"border":{"width":"0.0625rem"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}},"backgroundColor":"surface","borderColor":"stroke","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color has-surface-background-color has-background" style="border-width:0.0625rem;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta","fontFamily":"ui"} -->
			<p class="has-ink-muted-color has-text-color has-ui-font-family has-meta-font-size"><?php esc_html_e( 'For small teams', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
			<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Care', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-heading-font-family has-heading-l-font-size" style="margin-top:var(--wp--preset--spacing--s);line-height:1"><?php esc_html_e( '€290', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'per month, billed yearly', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-checklist","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}}}} -->
			<ul style="margin-top:var(--wp--preset--spacing--s);margin-bottom:var(--wp--preset--spacing--s)" class="wp-block-list is-style-checklist">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'One website', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Updates and backups every week', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Two hours of changes a month', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Reply within two working days', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Choose Care', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"width":"0.125rem"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}},"backgroundColor":"surface","borderColor":"accent","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group has-border-color has-accent-border-color has-surface-background-color has-background" style="border-width:0.125rem;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
			<!-- wp:paragraph {"className":"is-style-badge"} -->
			<p class="is-style-badge"><?php esc_html_e( 'Most popular', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
			<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Growth', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-heading-font-family has-heading-l-font-size" style="margin-top:var(--wp--preset--spacing--s);line-height:1"><?php esc_html_e( '€690', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'per month, billed yearly', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-checklist","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}}}} -->
			<ul style="margin-top:var(--wp--preset--spacing--s);margin-bottom:var(--wp--preset--spacing--s)" class="wp-block-list is-style-checklist">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Up to three websites', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Six hours of design and development a month', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'A review of goals and results each quarter', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Reply within one working day', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"dimensions":{"width":"100%"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Choose Growth', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"border":{"width":"0.0625rem"},"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|xs"}},"backgroundColor":"surface","borderColor":"stroke","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color has-surface-background-color has-background" style="border-width:0.0625rem;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta","fontFamily":"ui"} -->
			<p class="has-ink-muted-color has-text-color has-ui-font-family has-meta-font-size"><?php esc_html_e( 'For larger organizations', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"heading-s"} -->
			<h3 class="wp-block-heading has-heading-s-font-size"><?php esc_html_e( 'Partner', 'leitvia' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"fontSize":"heading-l","fontFamily":"heading"} -->
			<p class="has-heading-font-family has-heading-l-font-size" style="margin-top:var(--wp--preset--spacing--s);line-height:1"><?php esc_html_e( '€1,490', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"meta"} -->
			<p class="has-ink-muted-color has-text-color has-meta-font-size"><?php esc_html_e( 'per month, billed yearly', 'leitvia' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-checklist","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"}}}} -->
			<ul style="margin-top:var(--wp--preset--spacing--s);margin-bottom:var(--wp--preset--spacing--s)" class="wp-block-list is-style-checklist">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Up to ten websites', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Fifteen hours of work a month', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Accessibility and speed audit twice a year', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'A named contact and a monthly call', 'leitvia' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Choose Partner', 'leitvia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}},"typography":{"textAlign":"center"}},"textColor":"ink-muted","fontSize":"meta"} -->
	<p class="has-text-align-center has-ink-muted-color has-text-color has-meta-font-size" style="margin-top:var(--wp--preset--spacing--l)"><?php esc_html_e( 'Every plan runs month to month after the first year. Unused hours carry over for one month.', 'leitvia' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
