# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][eUf2P4] and this project adheres to [Semantic Versioning][8XQWYB].

[eUf2P4]: https://keepachangelog.com/en/2.0.0/
[8XQWYB]: https://semver.org/spec/v2.0.0.html

## [Unreleased]

## [2.0.0] - 2026-06-16

### Changed

- **Breaking:** Required [Kirby 5.4][RdjwFk].
- **Breaking:** View object `\Kensho\Sitemap\Template\Sitemap\Item` requires an instance of `\Kirby\Cms\App` now.

[RdjwFk]: https://github.com/getkirby/kirby/releases/tag/5.4.0

### Removed

- **Breaking:** Removed old namespaces.
  - `\Kensho\Sitemap\View\Template\`

## [1.1.0] - 2026-06-10

### Changed

- Used virtual page for automatic caching.
- Simplified namespaces.
  - `\Kensho\Sitemap\Template\`

### Deprecated

- Deprecated old namespaces.
  - `\Kensho\Sitemap\View\Template\`

## [1.0.0] - 2026-04-03

### Added

- Initial release.
