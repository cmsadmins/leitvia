# Leitvia

An AI-first block theme for WordPress, built on semantic design tokens. Every pattern uses roles instead of values, so style variations, AI agents and editors can change the whole design without breaking layout or accessibility. Built to meet WCAG 2.2 AA and BITV 2.0; fonts and images ship with the theme, nothing loads from other servers.

- Website and documentation: https://leitvia.com
- Demo: https://demo.leitvia.com
- Plugin for agents, recipes and design tokens: [Leitvia Studio](https://github.com/cmsadmins/leitvia-studio)
- Agent skills: [Leitvia Skills](https://github.com/cmsadmins/leitvia-skills)
- Child theme for patterns and templates kept as files: [Leitvia Child](https://github.com/cmsadmins/leitvia-child)
- Starter plugin for blocks of your own: [Leitvia Block Starter](https://github.com/cmsadmins/leitvia-block-starter)
- Developer guide: https://leitvia.com/docs/developers/

## WordPress standards

Leitvia supports the standards WordPress sets for AI agents and will keep supporting them: the skills of [WordPress/agent-skills](https://github.com/WordPress/agent-skills), the Abilities API with its REST routes under `/wp-json/wp-abilities/v1` and the default server of the MCP Adapter. The [developer guide](https://leitvia.com/docs/developers/) shows how the packages fit together, with real calls. Agents write content through the abilities of Leitvia Studio and never into the files of this theme; files of your own go into the child theme, blocks into a plugin.

## Install

Requires WordPress 7.1 and PHP 8.2 or later.

Until the theme is listed on WordPress.org, download `leitvia-<version>.zip` from the [releases](https://github.com/cmsadmins/leitvia/releases) and upload it under Appearance, Themes, Add New, Upload Theme. The zip is the same package that goes to WordPress.org; this repository holds its source.

## Development

This repository is a mirror of the package in the Leitvia monorepo. Report problems and accessibility barriers as issues here or through https://leitvia.com.

## License

GPL-2.0-or-later, see `readme.txt` for the licenses of fonts and images.
