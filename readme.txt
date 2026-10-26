=== Leitvia ===
Contributors: contexlabs
Requires at least: 7.1
Tested up to: 7.1
Requires PHP: 8.2
Stable tag: 1.2.4
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, news, e-commerce, one-column, block-patterns, block-styles, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, style-variations, accessibility-ready, translation-ready, threaded-comments

An AI-first block theme built on semantic design tokens.

== Description ==

Leitvia is an AI-first block theme built on semantic design tokens. Every pattern uses roles instead of values, so style variations, AI agents and editors can change the whole design without breaking layout or accessibility. Warm editorial by default, flexible from personal blogs to large corporate sites and online shops built with WooCommerce.

= Leitvia Studio and Leitvia Pro =

The theme works on its own. The free plugin Leitvia Studio (Plugins, Add New, search for "Leitvia Studio") adds a Pattern Lab with previews in every style variation, token sets for your brand, site recipes that set up a blog, company site, publication, documentation or shop in one step, a content model, and a gateway through which AI agents such as Claude Code build pages from the patterns of this theme. The paid add-on Leitvia Pro adds the blocks Slider, Scroll story, Before and after and Entry list and eight industry kits: https://leitvia.com/pricing/

== Accessibility ==

Leitvia is built to meet WCAG 2.2 level AA and the web requirements of BITV 2.0 / EN 301 549 (chapter 9, WCAG 2.1 AA), and it meets the WordPress.org accessibility-ready requirements:

* Skip link to the main content as the first focusable element, landmarks for header, navigation, main content and footer, one h1 per page and no skipped heading levels.
* Every function works with the keyboard. Submenus open on click, Enter or Space, never on hover alone, report their state with aria-expanded and close with Escape, returning focus to their button. The mobile menu is a modal dialog that keeps focus inside until it is closed.
* A double focus ring (outline plus an inner ring) reaches at least 3:1 on every background in every style variation, and stays visible in Windows high contrast mode.
* Text and interface colors reach at least 4.5:1 (text) and 3:1 (controls, icons, form fields) in every style variation and color preset.
* Links in running text are underlined. Accordions use the native details element, so their state is announced by screen readers.
* Content reflows at 320 CSS pixels, text can be enlarged to 200 % and text spacing can be increased without loss. Animations stop when the operating system asks for reduced motion.
* Form fields in search and comments have visible labels, required fields are marked and personal data fields declare their purpose (autocomplete).
* A pattern "Accessibility statement" gives site owners a template with the details BITV 2.0 and the European Accessibility Act require.
* The page template "Page in easy language" sets pages in easy language (Leichte Sprache) in a narrower column with larger text, line height 1.6, left aligned and without hyphenation. Leitvia Studio links such a page and its original with a language switch.

These properties are checked by an automated test suite (axe-core and a BITV 2.0 suite with keyboard, layout, contrast and form tests) on every template and pattern in every style variation. Automated tests do not replace a test by people: screen reader checks are done by hand, and the accessibility of a site also depends on its content and plugins. Report accessibility problems at https://leitvia.com.

== WooCommerce ==

Leitvia supports WooCommerce with block templates, template parts, patterns and styles for the WooCommerce blocks. WooCommerce itself is not required: without it the theme works completely, its standard templates and parts contain no WooCommerce block and the shop patterns are not offered.

* Templates for the shop page, product categories, tags, attributes and brands (these use the shop template), product search results, single products, cart, checkout and order confirmation. The My account page is created by WooCommerce; the theme styles its login, registration and account forms.
* Template parts "Shop header" with product search, customer account and mini cart, and for the checkout a header with logo and a link back to the cart and a minimal footer, without the main navigation.
* Shop patterns in the category "Shop": shop hero with product, category tiles, new arrivals, bestsellers, a benefits bar, trust badges and "Legal price information". The last one shows the tax note, shipping costs, unit price and delivery time from the blocks of Germanized, is offered only while Germanized is active and is already part of the single product template. "Legal guarantee notice" shows the EU notice on the legal guarantee from Germanized below the add to cart form, as a disclosure with a text summary, the label and a link to europa.eu; the theme renders the notice this way in cart and checkout as well.
* Styles for prices, sale badge, ratings, product tabs, cart, checkout, notices and mini cart come from the same design tokens as the rest of the theme, in every style variation. They load only on pages that use the blocks.
* Plugins that hook into the classic WooCommerce templates keep working: the templates are built like the block templates of WooCommerce, so the classic product, shop and account hooks fire, and the product page uses the classic product tabs and add to cart form.
* Cart and checkout work with the keyboard, keep the double focus ring, reach WCAG 2.2 AA contrast for prices, fields and error messages and reflow at 320 CSS pixels.

The theme adds no shop functions of its own: no shortcodes, no template overrides in a woocommerce folder and no JavaScript. Cart, checkout and payment are WooCommerce blocks.

== Polylang ==

Leitvia works with Polylang for multilingual sites. Polylang translates posts and pages, but its free version does not translate template parts. While a visitor views a language other than the default language, the theme shows the template part with the language code appended to its slug in place of the original, if it exists: header-de for header, footer-fr for footer. Create these parts in the Site Editor. Without Polylang or without such a part nothing changes. The language switcher blocks of Polylang take the link, navigation and focus styles of the theme.

== Privacy ==

Leitvia itself makes no external requests and sets no cookies. Fonts, images and styles ship with the theme, and templates and patterns show no avatars, because WordPress loads them from Gravatar, a third-party service; author pages identify the author by name and biography. WordPress core, plugins and embedded content can still send requests or set cookies.

WooCommerce loads nothing from other hosts on the front end of a new shop, but its feature "Order attribution" is on by default and sets cookies (sbjs_*) on every page view, before a visitor does anything. Switch it off under WooCommerce, Settings, Advanced, Features unless your consent solution covers it; the cart cookies then only appear once a visitor adds a product to the cart. Usage tracking and marketplace suggestions in the admin can be switched off under WooCommerce, Settings, Advanced as well. The recipe "Shop" of the plugin Leitvia Studio switches all of these off. Product reviews show avatars through WordPress; without a plugin for local profile pictures they come from Gravatar while "Show Avatars" under Settings, Discussion is on.

== Support ==

Leitvia is developed and maintained by CMS ADMINS, https://cms-admins.de. Ask questions in the support forum of the theme on WordPress.org or write to support@cms-admins.de. Report accessibility barriers to the same address; we answer within five working days.

== Legal ==

Leitvia is a product of CMS ADMINS, a brand of MSRV Hosting und Service GbR, Parkstraße 19, 80339 München, Germany, represented by Patrick Schlesinger and Peter Laschtowitz. Contact: support@cms-admins.de.

Disclaimer: Leitvia is free software under the GNU GPL, version 2 or later. It is provided as is, without any warranty, to the extent permitted by applicable law; see sections 11 and 12 of the GPL. You are responsible for checking that your site meets the legal requirements that apply to it, such as accessibility, privacy and imprint duties; Leitvia helps with these but does not replace that check.

* Imprint: https://leitvia.com/legal-notice/ (German original: https://leitvia.com/de/impressum/)
* Privacy policy: https://leitvia.com/privacy-policy/
* Terms for the paid Leitvia Pro plans and the account on leitvia.com (they do not apply to this free software): https://leitvia.com/terms/

== Changelog ==

= 1.2.4 =
* Hero with card over image: the card reaches into the image again and fills the row on wide screens; in 1.2.3 a core rule for columns with a fixed width kept it at its own width beside the image.

= 1.2.3 =
* New header patterns: Header with button (header-cta) with the main navigation and one button for the main action, Header with service bar (header-utility) with opening hours and phone number in a slim bar above, and Header with centered logo (header-split) with the navigation on the left and the logo exactly in the middle.
* New hero patterns: Hero with card over image (hero-overlap), a large photo with the text card reaching into it, and Hero with three teasers (hero-teaser-trio), three tall picture teasers as the entry of a home page.
* New block styles: Overlap for Columns, Header split for Group and Header action for Buttons, which hides the header button below 1024 px. Design contract 1.13.1.

= 1.2.2 =
* Right-to-left: the sale badge on product images sits at the inline start and the product attribute table pads at the inline end, so both mirror in right-to-left languages.

= 1.2.1 =
* A search placed in the page content, such as the pattern Hero with search, replaces the search of the header on that page, so the front page of a help center shows one search field instead of two.

= 1.2.0 =
* The EU notice on the legal guarantee of Germanized is a disclosure with a text summary, the label at 20rem and a text link to europa.eu, in every variant and place: product block, cart, checkout, the shortcode and the footer. No popover, no link to "#".
* New pattern Legal guarantee notice (shop-legal-guarantee), placed in the single product template below the add to cart form. It registers only with Germanized and shows only while the notice is switched on there.
* The footer location of Germanized sits inside the footer landmark, through the new action leitvia_footer_end that other plugins can use as well.
* Theme contract 1.13.0.

= 1.1.0 =
* The theme description and the readme name the free plugin Leitvia Studio and what it adds.
* New patterns: Downloads (content-downloads) in the new list style Download, one text link per file with format and size; Masthead (header-masthead) for a newspaper; Hero with search (hero-search) for documentation and help centers; Front page (teaser-front-page) with the sticky lead story and headlines in brief.
* Blog: lists of posts get a continue reading link that names the post for screen readers, the blog heading takes title and excerpt of the posts page, and single posts get an author box without avatar, a post navigation that says previous or next article and up to three related posts from the same categories.
* Shop category tiles show the image of the category through the new binding source leitvia/term-image, with width and height set on render; a category without an image keeps name and description.
* Clear on a variable product is a button instead of a link to "#", so screen readers announce an action and Space presses it.
* Button labels wrap between words, the headings of the shop USP bar are level 2.

= 1.0.2 =
* accessibility.txt describes how the theme is tested for accessibility, its screen reader text class and where to report problems, as WordPress.org asks of themes with the tag accessibility-ready.
* The screenshot shows the current look with Newsreader headings.
* Copyright notices for Newsreader and IBM Plex Mono under Resources.

= 1.0.1 =
* Fonts that a plugin adds to a token set are preloaded like the fonts of the theme.

= 1.0.0 =
* First public release.
* Polylang support: in a language other than the default one, a template part named after the original plus the language code (for example header-de) takes the place of the original.
* The copyright year in the footer patterns comes from the block binding source leitvia/site-meta, so a footer saved in the Site Editor still shows the current year.
* The mobile menu of every header is the new template part "Navigation overlay" (area navigation-overlay, WordPress 7.1), editable in the Site Editor.
* Every search form is a named search landmark (Site search, Search products, Search documentation, Search this site), so several searches on one page can be told apart.
* Text shadows stay off, including the defaults WordPress 7.2 brings for headings and paragraphs, and text blocks offer no background image, so text keeps its contrast.
* Contract 1.9.0 and 1.10.0: template part navigation-overlay, notes on search names and the copyright binding, rule for text over images.
* One left edge and one text width on every page: breadcrumbs, title and text start at the wide edge on all templates, in every style variation, instead of centered on some pages and left on others. Card grids on archives use the wide width; the changelog, price list, quote and posts list bands keep their narrower text on the same edge. Contract 1.10.0 describes the rule under layout.
* On narrow screens the cart keeps the focused element clear of the checkout button WooCommerce pins to the bottom of the viewport (WCAG 2.4.11).
* The Germanized price note in the mini cart ("incl. VAT") uses ink-muted like the other Germanized notes (4.5:1 instead of 4.19:1).
* With Germanized the product table in the checkout summary sits on the page surface instead of its fixed light grey, so dark styles keep their contrast (1.07:1 before in corporate-dark).
* Pattern images reserve their space while they load: images from the theme get their width and height on render, so the page does not shift. This includes images saved with a path from the site root.
* The body and heading fonts of the active style are preloaded from the theme, so text above the fold does not jump when the web font arrives.
* Process steps show four across or two by two, never three and a lone fourth.
* Key figures, Services, Team and the link columns of Footer mega show four across or two by two as well, never three and a lone fourth.
* Posts with category badges and Posts grid show exactly the number of posts they promise: a sticky post keeps its place by date instead of adding a lone extra card.
* On pages built from full-width sections, breadcrumbs, page title and intro start at the wide edge of the sections.
* Post titles fill the line instead of breaking at half the column width.
* Calmer, more refined look: primary buttons are ink rectangles 48 px high in Inter Tight, headings use the display cut of Newsreader instead of Fraunces, eyebrows, badges and footer heads share one small caps voice, and the footer reads like a quiet register without rules between links.
* New font role ui (contract 1.6.0) for buttons, navigation and labels in every style variation; token sets without it fall back to the body font.
* WooCommerce support: block templates for shop, product archives, product search, single product, cart, checkout and order confirmation, a shop header with search, account and mini cart, a checkout header and footer, seven shop patterns including legal price information with Germanized, and compatibility with the classic WooCommerce hooks. The theme runs fully without WooCommerce. The tag e-commerce replaces portfolio.
* Shop: product cards on one left edge with outline buttons, a refined sale badge, readable struck prices, quiet product tabs, a two column checkout with the order summary on a tinted panel and a minimal checkout footer, a cleaner mini cart and account forms.
* Contract 1.7.0: composition rules gain a section limit and scoring weights, so agents and Leitvia Studio rate a page the same way.

== Copyright ==

Leitvia WordPress Theme, (C) 2026 Patrick Schlesinger, CMS ADMINS.
Leitvia is distributed under the terms of the GNU GPL.

== Resources ==

Resources used by the theme are listed here.

= Fonts =

Bundled locally (latin and latin-ext subsets, WOFF2), all licensed under the SIL Open Font License 1.1. The license text sits next to each font in assets/fonts/. Files were obtained from Google Fonts (https://fonts.google.com), source repository https://github.com/google/fonts.

* Newsreader (with the optical size axis), Copyright 2020 The Newsreader Project Authors, SIL OFL 1.1, https://github.com/productiontype/Newsreader
* Inter Tight (upright and italic, weight axis), Copyright 2022 The Inter Project Authors, SIL OFL 1.1, https://github.com/google/fonts/tree/main/ofl/intertight
* IBM Plex Sans (upright and italic, weight axis), Copyright 2017 IBM Corp., SIL OFL 1.1, https://github.com/IBM/plex
* IBM Plex Mono, Copyright 2017 IBM Corp., SIL OFL 1.1, https://github.com/IBM/plex

= Images and logos =

Images and logos in assets/images are created by Patrick Schlesinger, CMS ADMINS, licensed under GPLv2 or later.

= Screenshot =

screenshot.png shows the theme with its own demo content and the images from assets/images, created by Patrick Schlesinger, CMS ADMINS, licensed under GPLv2 or later.
