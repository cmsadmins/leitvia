<?php
/**
 * Leitvia theme setup.
 *
 * @package Leitvia
 */

declare( strict_types=1 );

namespace Leitvia;

defined( 'ABSPATH' ) || exit;

/**
 * Registers per-block stylesheets so CSS loads only when the block is on the page.
 */
function register_block_styles(): void {
	$dir   = get_theme_file_path( 'assets/css/blocks' );
	$files = glob( $dir . '/*.css' );
	if ( false === $files ) {
		return;
	}
	foreach ( $files as $file ) {
		if ( str_ends_with( $file, 'woocommerce--account.css' ) ) {
			continue;
		}
		$block = str_replace( '--', '/', basename( $file, '.css' ) );
		wp_enqueue_block_style(
			$block,
			array(
				'handle' => 'leitvia-' . basename( $file, '.css' ),
				'src'    => get_theme_file_uri( 'assets/css/blocks/' . basename( $file ) ),
				'path'   => $file,
				'ver'    => wp_get_theme()->get( 'Version' ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );

/**
 * The account pages of WooCommerce come in through a shortcode, not a block, so their stylesheet loads by page.
 */
function enqueue_account_styles(): void {
	if ( function_exists( 'is_account_page' ) && is_account_page() ) {
		wp_enqueue_style( 'leitvia-woocommerce--account', get_theme_file_uri( 'assets/css/blocks/woocommerce--account.css' ), array(), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_account_styles' );

/**
 * Registers block style variations that need theme CSS.
 */
function register_block_style_variations(): void {
	register_block_style(
		'core/columns',
		array(
			'name'  => 'media-right',
			'label' => __( 'Media right', 'leitvia' ),
		)
	);

	$styles = array(
		'core/paragraph'  => array(
			'badge'   => __( 'Badge', 'leitvia' ),
			'eyebrow' => __( 'Eyebrow', 'leitvia' ),
		),
		'core/group'      => array(
			'note'    => __( 'Note', 'leitvia' ),
			'success' => __( 'Success', 'leitvia' ),
			'warning' => __( 'Warning', 'leitvia' ),
			'inverse' => __( 'Inverse', 'leitvia' ),
		),
		'core/cover'      => array(
			'inverse' => __( 'Inverse', 'leitvia' ),
		),
		'core/table'      => array(
			'comparison' => __( 'Comparison', 'leitvia' ),
		),
		'core/code'       => array(
			'terminal' => __( 'Terminal', 'leitvia' ),
		),
		'core/list'       => array(
			'divided'       => __( 'Divided', 'leitvia' ),
			'checklist'     => __( 'Checklist', 'leitvia' ),
			'checklist-row' => __( 'Checklist row', 'leitvia' ),
		),
		'core/post-terms' => array(
			'badge' => __( 'Badge', 'leitvia' ),
		),
	);
	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_style_variations' );

/**
 * Registers the demo client logos as an icon collection, so the Icon block draws them in the current text color.
 * The files hold only paths: core keeps svg, path and polygon elements and drops everything else.
 */
function register_logo_icons(): void {
	wp_register_icon_collection( 'leitvia', array( 'label' => __( 'Leitvia', 'leitvia' ) ) );
	$logos = array(
		1 => __( 'Tervane', 'leitvia' ),
		2 => __( 'Kolmar Works', 'leitvia' ),
		3 => __( 'Brinnel & Co', 'leitvia' ),
		4 => __( 'Halvera', 'leitvia' ),
		5 => __( 'Marlow Fenn', 'leitvia' ),
	);
	foreach ( $logos as $number => $label ) {
		wp_register_icon(
			'leitvia/logo-' . $number,
			array(
				'label'     => $label,
				'file_path' => get_theme_file_path( 'assets/images/logo-' . $number . '.svg' ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\register_logo_icons' );

/**
 * Block bindings source leitvia/site-meta for values that change by themselves. The copyright line of the footer
 * patterns binds its content to the key copyright, so it shows the current year on every request. A footer saved in
 * the Site Editor keeps the binding instead of the year it was saved in. Presentation only: nothing is stored.
 */
function register_site_meta_binding(): void {
	register_block_bindings_source(
		'leitvia/site-meta',
		array(
			'label'              => __( 'Site details', 'leitvia' ),
			'get_value_callback' => __NAMESPACE__ . '\site_meta_value',
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_site_meta_binding' );

/**
 * Value of a leitvia/site-meta binding, null for an unknown key so the block keeps its saved content.
 *
 * @param array $args Binding arguments, key names the value.
 */
function site_meta_value( array $args ): ?string {
	return 'copyright' === ( $args['key'] ?? '' ) ? '© ' . wp_date( 'Y' ) : null;
}

/**
 * Returns the text of the first figcaption in a block's HTML, or an empty string.
 *
 * @param string $html Block HTML.
 */
function figcaption_text( string $html ): string {
	$tags = new \WP_HTML_Tag_Processor( $html );
	if ( ! $tags->next_tag( 'figcaption' ) ) {
		return '';
	}
	$text = '';
	while ( $tags->next_token() ) {
		if ( 'FIGCAPTION' === $tags->get_tag() && $tags->is_tag_closer() ) {
			break;
		}
		if ( '#text' === $tags->get_token_name() ) {
			$text .= $tags->get_modifiable_text();
		}
	}
	return trim( preg_replace( '/\s+/', ' ', $text ) );
}

/**
 * Makes the outer element of a block keyboard focusable, so wide content can be scrolled with the arrow keys
 * in every browser (WCAG 2.1.1). With a label it also becomes a named region. Existing attributes are kept.
 *
 * @param string $html       Block HTML.
 * @param string $tag        Outer tag name.
 * @param string $class_name Outer class name.
 * @param string $label      Accessible name, empty for none.
 */
function add_scroll_region( string $html, string $tag, string $class_name, string $label = '' ): string {
	$tags = new \WP_HTML_Tag_Processor( $html );
	if ( ! $tags->next_tag(
		array(
			'tag_name'   => $tag,
			'class_name' => $class_name,
		)
	) ) {
		return $html;
	}
	$attributes = array( 'tabindex' => '0' );
	if ( '' !== $label ) {
		$attributes['role']       = 'region';
		$attributes['aria-label'] = $label;
	}
	foreach ( $attributes as $name => $value ) {
		if ( null === $tags->get_attribute( $name ) ) {
			$tags->set_attribute( $name, $value );
		}
	}
	return $tags->get_updated_html();
}

/**
 * Table blocks scroll sideways when their columns do not fit, see core--table.css. Only a captioned table
 * becomes a named region; a generic name would add landmarks that say nothing.
 *
 * @param string $html Block HTML.
 */
function table_scroll_region( string $html ): string {
	return add_scroll_region( $html, 'figure', 'wp-block-table', figcaption_text( $html ) );
}
add_filter( 'render_block_core/table', __NAMESPACE__ . '\table_scroll_region' );

/**
 * Only the terminal style scrolls sideways, see core--code.css; plain code blocks wrap.
 *
 * @param string $html Block HTML.
 */
function code_scroll_region( string $html ): string {
	return add_scroll_region( $html, 'pre', 'is-style-terminal' );
}
add_filter( 'render_block_core/code', __NAMESPACE__ . '\code_scroll_region' );

/**
 * Every search block is a search landmark. Several on one page (header, documentation sidebar, 404, shop) need
 * different names, so the landmark takes the label of the block's field, which the theme patterns set per place
 * (lint rule search-landmark-name). A name set in another way is kept.
 *
 * @param string $html  Block HTML.
 * @param array  $block Parsed block.
 */
function search_landmark_name( string $html, array $block ): string {
	$tags = new \WP_HTML_Tag_Processor( $html );
	if ( ! $tags->next_tag( array( 'class_name' => 'wp-block-search' ) ) || null !== $tags->get_attribute( 'aria-label' ) ) {
		return $html;
	}
	$label = trim( wp_strip_all_tags( (string) ( $block['attrs']['label'] ?? '' ) ) );
	$tags->set_attribute( 'aria-label', '' !== $label ? $label : __( 'Search', 'leitvia' ) );
	return $tags->get_updated_html();
}
add_filter( 'render_block_core/search', __NAMESPACE__ . '\search_landmark_name', 10, 2 );

/**
 * The documentation sidebar marks its page list with this class, see patterns/hidden-page-docs-sidebar.php.
 */
const DOCS_PAGES_CLASS = 'leitvia-docs-pages';

/**
 * On the documentation template the sidebar's page list shows the current documentation section: the topmost
 * ancestor page first, then its child pages, instead of every page of the site. Other page lists and a parent page
 * set in the editor are left alone.
 *
 * @param string|null $html  Markup from an earlier filter, null to render normally.
 * @param array       $block Parsed block.
 */
function docs_section_pages( ?string $html, array $block ): ?string {
	if ( null !== $html
		|| 'core/page-list' !== $block['blockName']
		|| ! empty( $block['attrs']['parentPageID'] )
		|| ! in_array( DOCS_PAGES_CLASS, explode( ' ', $block['attrs']['className'] ?? '' ), true )
		|| ! is_page_template( 'page-docs' ) ) {
		return $html;
	}
	$page      = get_queried_object_id();
	$ancestors = get_post_ancestors( $page );
	$root      = $ancestors ? (int) end( $ancestors ) : $page;

	$block['attrs']['parentPageID'] = $root;
	$children                       = render_block( $block );

	$current = $root === $page;
	$item    = sprintf(
		'<li class="wp-block-pages-list__item%1$s"><a class="wp-block-pages-list__item__link" href="%2$s"%3$s>%4$s</a></li>',
		$current ? ' current-menu-item' : '',
		esc_url( get_permalink( $root ) ),
		$current ? ' aria-current="page"' : '',
		esc_html( get_the_title( $root ) )
	);
	if ( '' === trim( (string) $children ) ) {
		return '<ul class="wp-block-page-list ' . DOCS_PAGES_CLASS . '">' . $item . '</ul>';
	}
	return preg_replace_callback( '/<ul\b[^>]*>/', fn( array $ul ): string => $ul[0] . $item, $children, 1 );
}
add_filter( 'pre_render_block', __NAMESPACE__ . '\docs_section_pages', 10, 2 );

/**
 * Polylang translates posts and pages but not template parts. While Polylang shows a language other than its default
 * one, the template part <slug>-<language> (for example header-de) stands in for <slug>, if the theme or the Site
 * Editor has one. Without Polylang nothing changes.
 *
 * @param array $block Parsed block.
 */
function translated_template_part( array $block ): array {
	if ( 'core/template-part' !== $block['blockName'] || empty( $block['attrs']['slug'] ) || ! function_exists( 'pll_current_language' ) ) {
		return $block;
	}
	$language = pll_current_language();
	if ( ! $language || pll_default_language() === $language ) {
		return $block;
	}
	$slug = $block['attrs']['slug'] . '-' . $language;
	if ( get_block_template( ( $block['attrs']['theme'] ?? get_stylesheet() ) . '//' . $slug, 'wp_template_part' ) ) {
		$block['attrs']['slug'] = $slug;
	}
	return $block;
}
add_filter( 'render_block_data', __NAMESPACE__ . '\translated_template_part' );

/**
 * Pattern images point to fixed files in assets/images/. The block editor's markup for core/image and core/cover
 * carries no width and height attributes, so the browser cannot reserve the space before the file arrives and the page
 * shifts (CLS). This adds the file's intrinsic size to such images on render; the saved markup stays canonical.
 * Images that already carry a width, and images from anywhere else (the media library sizes its own), are left alone.
 *
 * @param string $html Block HTML.
 */
function theme_image_size( string $html ): string {
	static $sizes = array();
	$tags         = new \WP_HTML_Tag_Processor( $html );
	$base         = get_theme_file_uri( 'assets/images/' );
	// Content saved with a path relative to the site root (/wp-content/themes/...) counts as well.
	$path = (string) wp_parse_url( $base, PHP_URL_PATH );
	while ( $tags->next_tag( 'img' ) ) {
		$src = (string) $tags->get_attribute( 'src' );
		if ( null !== $tags->get_attribute( 'width' ) || ! ( str_starts_with( $src, $base ) || str_starts_with( $src, $path ) ) ) {
			continue;
		}
		$file = basename( (string) wp_parse_url( $src, PHP_URL_PATH ) );
		if ( ! array_key_exists( $file, $sizes ) ) {
			$path           = get_theme_file_path( 'assets/images/' . $file );
			$sizes[ $file ] = is_readable( $path ) ? wp_getimagesize( $path ) : false;
		}
		if ( $sizes[ $file ] ) {
			$tags->set_attribute( 'width', (string) $sizes[ $file ][0] );
			$tags->set_attribute( 'height', (string) $sizes[ $file ][1] );
		}
	}
	return $tags->get_updated_html();
}
add_filter( 'render_block_core/image', __NAMESPACE__ . '\theme_image_size' );
add_filter( 'render_block_core/cover', __NAMESPACE__ . '\theme_image_size' );

/**
 * Preloads the Latin upright files of the body, heading and ui (button) fonts in the active style, so text above the fold
 * renders in its own font instead of swapping from the fallback (layout shift through font-display: swap).
 * The files come from this site; style variations and token sets that change the fonts are resolved through the
 * global settings. Italic, Latin Extended and monospace files load on demand as before.
 */
function preload_fonts(): void {
	$families = array();
	foreach ( (array) wp_get_global_settings( array( 'typography', 'fontFamilies' ) ) as $origin ) {
		foreach ( (array) $origin as $family ) {
			$families[ $family['slug'] ?? '' ] = $family;
		}
	}
	$slugs = array(
		wp_get_global_styles( array( 'typography', 'fontFamily' ) ),
		wp_get_global_styles( array( 'elements', 'heading', 'typography', 'fontFamily' ) ),
		wp_get_global_styles( array( 'elements', 'button', 'typography', 'fontFamily' ) ),
	);
	$urls  = array();
	foreach ( $slugs as $value ) {
		if ( ! is_string( $value ) || ! preg_match( '/(?:\||--)font-family(?:\||--)([a-z0-9-]+)/', $value, $m ) ) {
			continue;
		}
		foreach ( $families[ $m[1] ]['fontFace'] ?? array() as $face ) {
			$src   = (array) ( $face['src'] ?? array() );
			$first = (string) reset( $src );
			if ( 'normal' !== ( $face['fontStyle'] ?? 'normal' ) || ! str_starts_with( $face['unicodeRange'] ?? 'U+0000', 'U+0000' ) ) {
				continue;
			}
			if ( str_starts_with( $first, 'file:./' ) ) {
				$urls[] = get_theme_file_uri( substr( $first, 7 ) );
			} elseif ( str_starts_with( $first, content_url( '/' ) ) ) {
				// Fonts a plugin adds to a token set, served from this site.
				$urls[] = $first;
			}
		}
	}
	foreach ( array_unique( $urls ) as $url ) {
		printf( '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n", esc_url( $url ) );
	}
}
add_action( 'wp_head', __NAMESPACE__ . '\preload_fonts', 1 );

/**
 * The shop header starter pattern is offered in the inserter only while WooCommerce registers its mini cart block, so a
 * site without WooCommerce never gets a header with blocks it cannot render. It stays registered either way, because the
 * template part header-shop references it.
 */
function hide_shop_header_without_woocommerce(): void {
	$registry = \WP_Block_Patterns_Registry::get_instance();
	$pattern  = $registry->get_registered( 'leitvia/header-shop' );
	if ( ! $pattern || \WP_Block_Type_Registry::get_instance()->is_registered( 'woocommerce/mini-cart' ) ) {
		return;
	}
	$registry->unregister( 'leitvia/header-shop' );
	$registry->register( 'leitvia/header-shop', array_merge( $pattern, array( 'inserter' => false ) ) );
}
add_action( 'init', __NAMESPACE__ . '\hide_shop_header_without_woocommerce', 20 );

/**
 * Block names used anywhere in a list of parsed blocks.
 *
 * @param array $blocks Parsed blocks.
 * @return string[]
 */
function block_names( array $blocks ): array {
	$names = array();
	foreach ( $blocks as $block ) {
		if ( $block['blockName'] ) {
			$names[] = $block['blockName'];
		}
		$names = array_merge( $names, block_names( $block['innerBlocks'] ) );
	}
	return $names;
}

/**
 * The shop patterns (leitvia/shop-*) exist only while WooCommerce runs and every block they use is registered, so the
 * inserter never offers a pattern with missing blocks. The legal information pattern also needs the blocks of Germanized;
 * without them it is gone and the product template, which references it, renders nothing in its place.
 */
function register_shop_patterns(): void {
	$registry = \WP_Block_Patterns_Registry::get_instance();
	$blocks   = \WP_Block_Type_Registry::get_instance();
	$woo      = function_exists( 'WC' );
	if ( $woo ) {
		register_block_pattern_category( 'leitvia-shop', array( 'label' => __( 'Shop', 'leitvia' ) ) );
	}
	foreach ( (array) glob( get_theme_file_path( 'patterns/shop-*.php' ) ) as $file ) {
		$name = 'leitvia/' . basename( $file, '.php' );
		if ( ! $registry->is_registered( $name ) ) {
			continue;
		}
		$used = $woo ? block_names( parse_blocks( $registry->get_registered( $name )['content'] ) ) : array();
		if ( ! $woo || array_filter( $used, fn( string $block ): bool => ! $blocks->is_registered( $block ) ) ) {
			$registry->unregister( $name );
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_shop_patterns', 20 );
