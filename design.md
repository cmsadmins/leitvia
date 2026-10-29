# Leitvia design guide

This guide explains the design system of the Leitvia theme for AI agents and developers. The binding data lives in `leitvia-contract.json` next to this file: roles, contrast pairs, patterns with composition metadata, page frames, block styles, templates and variations. When this guide and the contract disagree, the contract wins.

## Brand stance

Leitvia is warm, editorial and calm. Pages read like a well edited magazine: generous white space, serif headings, few colors, one clear action per screen. The default style is Warm Editorial Light (paper tone, Newsreader for text and headings, its display cut for large headings, Inter Tight for buttons and labels). Variations change values, never slugs, so everything below holds for every style.

- Say less, show structure. Prefer one strong section over three weak ones.
- Contrast comes from scale, tone and rhythm, not from more colors or effects.
- Sharp edges by default. Radius tokens only where the role table allows them.
- Primary buttons are ink rectangles with a 2 px radius; the accent stays for links, eyebrows and hover. Buttons never become pills.
- One small-text voice: eyebrows, badges, footer heads and table heads share the `ui` font in caps at 12 px. Hierarchy comes from color and space, not weight.
- No gradients, no emojis, no decorative borders on the left edge of boxes.
- No text shadows and no background images on text blocks (headings, paragraphs, lists, quotes, buttons, titles). The theme switches both off, also the text shadow that WordPress 7.2 adds to headings and paragraphs. Background images stay on Group and Cover, where the Cover overlay keeps text readable.

## Roles

Use role presets only. Never write hex values, px values, custom CSS or `!important`.

| Color role | Purpose |
| --- | --- |
| `surface` | Page background and default section background |
| `surface-alt` | Tinted sections, cards and bands |
| `ink` | Text, headings and primary buttons; background of dark bands through the Inverse block style |
| `ink-muted` | Lead paragraphs, captions, dates and meta lines |
| `accent` | Links, eyebrows, hover states, at most one accent band per page; buttons take it only on `ink` and inverse bands |
| `on-accent` | Text and icons on `accent` only |
| `stroke` | Rules, borders, dividers; eyebrow text on `ink` backgrounds |
| `focus` | Keyboard focus outline, never decoration |
| `success`, `warning`, `danger` | Status text and icons, always together with words |

| Other roles | Slugs | Use |
| --- | --- | --- |
| Font size | `meta`, `body`, `lead`, `heading-s`, `heading-m`, `heading-l`, `display` | `display` once per screen; h2 is `heading-m` or `heading-l`, except in `content-statement`, where the one sentence is the section |
| Font family | `body`, `heading`, `mono`, `ui` | `heading` also for large figures; `ui` for buttons, navigation, eyebrows, badges, meta lines, form fields and shop controls. Token sets without `ui` use `body` |
| Spacing | `xxs`, `xs`, `s`, `m`, `l`, `xl`, `xxl`, `xxxl` | Section padding follows density: `xxl` airy, `xl` regular, `l` dense |
| Radius | `none`, `s`, `m`, `l`, `pill` | `none` for content boxes and badges, `s` (2 px) for buttons and fields, `pill` only for round portraits and switches |
| Shadow | `subtle`, `raised` | Rare; `raised` for floating elements only |

## Combination rules

Only the pairs listed in `pairs` are tested for WCAG 2.2 AA in every variation. Stay inside them:

- Text on `surface` or `surface-alt`: `ink`, `ink-muted`, `accent`.
- Text on `accent`: `on-accent` only. Buttons on accent use the outline style.
- Text on `ink`: `surface`, with `stroke` for small eyebrows.
- `success`, `warning`, `danger` only on `surface`.
- Never put `ink-muted` or `accent` text on `ink` or `accent`.
- The focus ring is a double ring (`focus` outline, `surface` inner ring), so it stays visible on every background. Do not override it.

## Width and edge

Every page has one left edge and one text width. `layout` in the contract holds the rule, the lint (`template-left-edge`) and the end-to-end test check it.

- The left edge is the wide edge (`wideSize`, 80rem). The root padding is `max(spacing m, (100vw - wideSize) / 2)`, so the padding of the page lands on it, and every template lays out `main` and the post content as constrained with `justifyContent` left.
- Breadcrumbs, title, excerpt, byline and running text start on that edge and are at most `contentSize` (37rem) wide, 60 to 75 characters a line. Only `page-easy-language` narrows the text to 34rem, on the same edge.
- `wide` and `full` only on purpose: `wide` for media, card and product grids, tables and a sidebar beside the content (`page-docs`, `archive-product`), `full` for colour bands and edge-to-edge images.
- Centered text only inside a band whose whole content is centered, such as `hero-centered` or `cta-newsletter`, never for the running text of a page.
- Width comes from layout settings (constrained, `justifyContent` left, `align` wide or full), never from a custom `max-width` or margin on a block. A band that narrows its text with `contentSize` (changelog, price list, quote, posts list) keeps `justifyContent` left.

## Composition rules

Every pattern carries `composition` metadata: `tone` (dominant background), `density`, `layout`, `weight`, `role` in the narrative and `width`. The `compositionRules` section turns the rhythm into machine-checkable rules. The Leitvia monorepo holds a reference checker that Studio uses; it is not shipped with the theme, so agents apply the rules below directly.

1. Never two adjacent sections with the same `layout` and the same `tone`.
2. After at most three sections comes a break: tone `image`, `accent` or `ink`, layout `full-bleed`, or `leitvia/content-quote`.
3. At least two sections between two `accent` sections, and at most one `accent` band per page. A second band takes the Inverse style or `surface-alt`. In Swiss Editorial Dark, `content-statement` and `cta-banner` use the Inverse style, so the coral stays a signal.
4. Density alternates: never three `airy`, `regular` or `dense` sections in a row.
5. A hero only as the first section, and only one per page.
6. Vary section spacing on purpose with the `l`, `xl` and `xxl` presets, never with random values. Every pattern already pads itself by its density (`sectionPadding` in the contract: `xxl` for airy, `xl` for regular, `l` for dense; the one-line trust strip uses `m`), so a page that follows rule 4 gets its rhythm without changes. Change a section's padding only to tighten a page on purpose, and only to another of these presets.

Header, footer and hidden page patterns have role `frame` and are ignored by the checks.

A page has at most 12 sections (`maxSections`). Each finding costs points: a page starts at 100 and loses the points `scoring` names for the rule, down to 0 (a second hero or a hero on a template that shows the title 20, an unknown pattern 25, a repeat, a missing break, accents too close or too many sections 10, a density run 5). Leitvia Studio publishes an agent's page on its own only from 80 points; below that the change waits for a person. Both worked examples below score 100.

`width` describes the content: `full` for full-bleed layouts, covers and full-aligned columns; `reading` when nothing is wide-aligned and the content is at most 48rem wide; `wide` otherwise.

Tell a story, not a list: hook, context, proof, detail, offer, close. Pick for each step the pattern whose `role` fits, then check the order against the rules.

### Expressive layouts

Pages should read like a designed magazine, not like stacked slices of equal weight. These patterns bring the variety; every one of them carries full composition metadata, so the rules above can place them.

| Pattern | Tone, layout, density | Use |
| --- | --- | --- |
| `content-asymmetric` | surface, asymmetric, regular | Two thirds text, a portrait image set lower beside it |
| `content-overlap` | surface, overlap, regular | Text card whose lower padding overlaps a wide image; text never sits on the picture |
| `content-break-image` | image, full-bleed, airy | Edge-to-edge image break with one short statement |
| `content-statement` | accent, asymmetric, airy | One sentence in `display` size on the accent color |
| `teaser-editorial-grid` | surface, grid, regular | Lead story on two thirds, four more posts beside it |
| `teaser-front-page` | surface, asymmetric, dense | Newspaper front: the sticky lead wide, headlines in brief and three more stories beside it |
| `content-media-pair` | surface-alt, asymmetric, airy | Two images of different size, offset, with captions |
| `hero-overlap` | surface, overlap, regular | Opening photo on two thirds, the card with the h1 reaching into it from the right |
| `hero-teaser-trio` | surface, grid, regular | Opening with three tall picture teasers instead of one message |

Offsets and overlaps come only from spacing presets (a top margin of `xxl`, or a negative top margin of `xl` written as `calc(var(--wp--preset--spacing--xl) * -1)`), never from fixed values. Keep the DOM order the reading order: the text comes first, the image follows.

Leitvia Studio adds patterns with its own blocks (bento grid, reveal, highlight format, pricing, comparison table, feature group). The contract lists them under `studioPatterns` with the same metadata; their slugs start with `leitvia-studio/`. Use them only when Leitvia Studio is active. The theme's own patterns never contain Studio blocks, so the theme stays complete without the plugin. Starting patterns of Studio for a template part area are not listed: `leitvia-studio/header-announcement` puts the announcement bar as a band over the full width above `leitvia/header-default`; pick it for the header in the Site Editor. For a news site, `leitvia/header-masthead` sets a wide logo centered above the navigation like the masthead of a daily, and `leitvia-studio/content-timeline` tells the background of a story as dated entries.

Shop patterns (`leitvia/shop-*`, inserter category Shop) carry `requires: [ "woocommerce" ]` and exist only while WooCommerce runs: product hero, benefits bar, category tiles, new arrivals, bestsellers and trust badges. A shop home page on `page-landing` reads well as `leitvia/shop-product-hero` > `leitvia/shop-usp-bar` > `leitvia/shop-category-tiles` > `leitvia/shop-new-arrivals` > `leitvia/shop-bestsellers` > `leitvia/proof-trust-strip`. `leitvia/shop-legal-info` (tax and shipping note, unit price, delivery time) also needs Germanized; the single product template already shows it below the price. `leitvia/shop-legal-guarantee` holds the EU notice on the legal guarantee from Germanized (block `woocommerce-germanized/product-legal-guarantee`) and sits below the add to cart form; it shows only while the notice is switched on in Germanized. The theme renders that notice everywhere Germanized prints it (product, cart, checkout, shortcode, footer) as a details block with a text summary, the label image and a link to europa.eu, and moves Germanized's footer location inside the footer landmark. Name payment methods as text, never as logos of other brands.

### Example: home page

`leitvia/hero-split-image` > `leitvia/proof-logos` > `leitvia/teaser-services` > `leitvia/proof-testimonial` > `leitvia/content-text-media` > `leitvia/content-stats` > `leitvia/teaser-posts-list` > `leitvia/cta-banner`

| # | Pattern | Tone, layout, density | Why here |
| --- | --- | --- | --- |
| 1 | `hero-split-image` | surface, split, regular | Hook with a picture |
| 2 | `proof-logos` | surface-alt, list, airy | Quiet pause, early trust |
| 3 | `teaser-services` | surface-alt, grid, regular | Context: what is on offer |
| 4 | `proof-testimonial` | accent, asymmetric, airy | Break after three sections |
| 5 | `content-text-media` | surface, split, regular | How the work is done |
| 6 | `content-stats` | surface, grid, airy | Proof in figures |
| 7 | `teaser-posts-list` | surface, list, dense | Fresh writing, text first |
| 8 | `cta-banner` | accent, asymmetric, airy | Close; four sections after the first accent |

### Example: service page

`leitvia/hero-centered` > `leitvia/proof-trust-strip` > `leitvia/content-text-media` > `leitvia/content-steps` > `leitvia/content-quote` > `leitvia/offer-pricing-3` > `leitvia/content-faq` > `leitvia/cta-contact`

| # | Pattern | Tone, layout, density | Why here |
| --- | --- | --- | --- |
| 1 | `hero-centered` | surface, centered, airy | One clear promise |
| 2 | `proof-trust-strip` | ink, list, dense | Answers doubts at once, counts as a break |
| 3 | `content-text-media` | surface, split, regular | What the service is |
| 4 | `content-steps` | surface, grid, regular | How it works |
| 5 | `content-quote` | surface-alt, centered, airy | A client voice as the break |
| 6 | `offer-pricing-3` | surface-alt, grid, dense | Offer |
| 7 | `content-faq` | surface, asymmetric, dense | Remaining questions |
| 8 | `cta-contact` | surface-alt, asymmetric, regular | Close with direct contact |

Both examples are stored in the contract under `examples` and satisfy every rule above.

## Pattern selection by page type

The `pageFrames` section names the slots of each page type (`intro`, `toc`, `actions`, `content`, `context`) and the pattern roles allowed in them. Slots are unordered and may repeat: the narrative order decides the sequence, the slots only say which roles belong on that page type.

| Page type | Template | Typical patterns |
| --- | --- | --- |
| Home | `page-landing` | Hero (split image, centered, overlap or three teasers), `proof-logos` or `proof-trust-strip`, `teaser-services`, a proof pattern, `teaser-posts-grid` or `teaser-posts-list`, `cta-banner` |
| Service | `page-landing` | `hero-centered` or `hero-split-image`, `content-text-media`, `content-steps`, `content-feature-grid`, `proof-testimonials-grid` or `content-quote`, `offer-pricing-3` or `content-price-list`, `content-faq`, `cta-contact` |
| Product | `page-landing` | `content-feature-catalog`, `content-compare-two`, `offer-pricing-3`, `content-changelog`, `content-downloads`, `teaser-posts-badge` |
| Blog | `home`, `archive`, `author`, `single` | No patterns of your own: the templates carry the overview with continue reading links and pagination, category and author archives with their descriptions, and the post page with author box, previous and next post and related posts. A posts page set in the reading settings gives the overview its h1 |
| Article | `single` | Core blocks in reading width; `content-quote`, `content-stats` or `content-steps` inside long reads; `cta-newsletter` at the end |
| About | `page-landing` | `hero-editorial`, `content-two-columns`, `content-stats`, `proof-team`, `content-quote`, `cta-contact` |
| Contact | `page` | `cta-contact`, `content-faq`, a form plugin block in a plain section |
| Documentation home | `page-landing` | `hero-search`, `content-feature-grid` or `content-steps`, `content-changelog`, `content-downloads`, `content-faq`, `cta-contact` |
| Series or catalog entry | `page-landing` | `hero-editorial` as the head with name and purpose, the content of the entry, `content-pager` at the end; the overview lists every entry with `content-feature-catalog` |

Before using a pattern read its `useWhen` and `docs.avoidWhen`. Respect `docs.contentLength` (characters of the main heading and of each supporting text) so layouts do not break. `images` lists every image slot with aspect ratio, display width and the pixel size to deliver.

## Blocks and block styles

Style core blocks with the theme block styles before reaching for classes, colors or custom CSS. `blockStyles` in the contract lists each style with its block, its purpose and the context it is made for; set it as `is-style-<name>` in `className`, for example `is-style-eyebrow` on a paragraph above a section heading. A style outside its context, such as a second Inverse band nested in the first, breaks the composition and the contrast pairs.

With Leitvia Studio active, `GET /wp-json/leitvia-studio/v1/blocks` returns every block of Studio and its add-ons: name, description, allowed parents and children, supports, the attributes as JSON schema and usage rules (`useWhen`, `avoidWhen`, `a11y`). Core blocks that Studio changes, such as Code, Embed and Tabs, are listed there with the change. Read the catalog before building a section from blocks, and prefer a pattern when one fits.

## Tone of voice

- Calm, precise, friendly. Write like a senior editor, not like an advert.
- Short sentences. One idea per paragraph. Concrete numbers instead of adjectives.
- Headings state a claim or a benefit in plain words, no puns, no exclamation marks.
- Buttons and links say where they lead ("Book an introductory call", "Read the case study on the rail help centre"), never "Click here" or "Read more".
- Never invent clients, quotes, figures or awards. Leave a placeholder for the site owner instead.

## Accessibility

Leitvia targets WCAG 2.2 AA and BITV 2.0. Agents must keep it that way:

- Exactly one h1 per page. Hero patterns hold it; every other pattern starts at h2. Templates with a title (`page`, `single`) already have the h1, so do not add a hero there.
- Headings follow the outline, never chosen for size. Use the font size roles to change size.
- Images: meaningful alt text, or empty alt when the image is decorative or the same information follows as text. An image with empty alt carries `metadata.leitviaDecorative: true` on its block, so checks know it is decorative on purpose; the hero covers of the theme patterns have it.
- Never convey meaning by color alone. Badges, recommended plans and status messages carry words.
- Link and button texts make sense out of context.
- Keep the contrast pairs above; never place text straight on an image. It sits on the overlay of `hero-cover-image` or in a box with a pair from `pairs`, such as a Group with `surface` background and `ink` text inside a Cover.
- Dark bands use the Inverse block style (`is-style-inverse` on a Group or Cover), not an `ink` background: it is `ink` with `surface` text in light palettes and `surface-alt` with `ink` text in dark ones, checked by `inversePairs` in the contract. Links inside take the band text color and stay underlined. On a Cover leave the overlay color unset, the style sets it.
- Client logos are Icon blocks from the `leitvia` icon collection and take the text color. Give each one the company name as its label.
- Every Search block is a search landmark named after its label. Give each search on a page its own label: the theme uses Site search (header), Search products (shop header), Search documentation (documentation sidebar) and Search this site (404). Searches in templates keep the default name Search.
- On sites with more than a few pages use `header-search`, so every page can be found by search as well as by navigation (WCAG 2.4.5).
- Files to download sit in a list, one text link per file that names the file, its format and its size ("Price list 2026 (PDF, 180 KB)"), as in `content-downloads` with the Download list style. Never an icon as the only link; the file mark of the style is decorative.
- Tables keep their caption; wide tables and terminal code become focusable scroll regions automatically.
- Pages in easy language (Leichte Sprache) are normal pages on the template `page-easy-language`; the template sets size, width and spacing. Write them by the rules of easy language: short sentences, one thought per sentence, common words, explain every unavoidable term, active voice, no abbreviations, numbers as digits. Headings and lists help more than long paragraphs. Leitvia Studio links the page and its original (setting in the page sidebar, block "Easy language switch").
- Respect reduced motion. The few theme transitions (color only, 150 ms) switch off under `prefers-reduced-motion`; patterns add no animation of their own, cards never scale on hover.
- Buttons are 48 px high, the place order button 52 px, shop icons have 44 px targets. Caps labels at 12 px only for eyebrows and badges, never for running text or links. Footer link lists in a navigation drop the underline at rest; running text keeps it.

## Template parts

Pick the header by what visitors need first: `header-default` for most sites, `header-cta` when one action such as booking matters on every page, `header-utility` when opening hours and a phone number belong on every page, `header-split` when the logo should lead in the middle, `header-centered` or `header-masthead` for publications. The button of `header-cta`, `header-utility` and `header-split` (block style Header action) is hidden below 1024 px, so its target must also be in the navigation.

Every header pattern opens the template part `navigation-overlay` as its mobile menu: a close button and the navigation as a vertical list on the `surface` background. Edit it in the Site Editor like header and footer. Its navigation shows the site's menu by default; when the header navigation is set to a specific menu, set the same menu in the overlay. The copyright line of every footer pattern is bound to the source `leitvia/site-meta` (key `copyright`) and always shows the current year, also after the footer is saved in the Site Editor. Keep the binding instead of typing a year.

## Known limitations

- In dark palettes the Inverse band uses `surface-alt`, which sits only about 1.1 to 1.2:1 apart from the page. The band reads as a quiet tint there, not as a strong break.
- An `ink` background set by hand still inverts in dark palettes (`ink` is light there). Use the Inverse style for bands that must stay dark.
- Inter Tight and IBM Plex Sans (Swiss and Corporate typography) ship without real italics; browsers synthesize them. Avoid italic headings in those styles.
- The mobile overlay of the core navigation shows all submenus open, Escape needs a second press after a submenu toggle, and the hover mode has no pointer bridge. Content stays fully reachable; a dedicated menu block will fix these in a later phase.

## Decisions

Design decisions with dates and the full specification are kept in the Leitvia monorepo, not in this theme. In short: no front page template (static home pages use `page` or `page-landing`), submenus open on click, wide tables and terminal code are focusable scroll regions, colors are roles that variations refill, never new slugs. Change the contract version with every change to `leitvia-contract.json`: major for removed or renamed roles and patterns, minor for additions, patch for descriptions.
