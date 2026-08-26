# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.0] - 2026-08-26

### Added

- Initial release of the Laravel Macro Sitemap package, an updated version of [VeiligLanceren-nl/laravel-seo-sitemap](https://github.com/VeiligLanceren-nl/laravel-seo-sitemap).
- Automatic sitemap generation from named routes via the `->sitemap()` macro.
- Advanced route templates via `->sitemapUsing(MyTemplate::class)`.
- Built-in `Template` abstract with helpers like `urlsFromModel()`.
- Per-URL configuration of `lastmod`, `priority` and `changefreq`.
- Save or serve sitemaps via disk or route.
- Sitemap index support for multiple sitemap files.
- Image support for sitemap URLs.
- Optional meta-tag injection in `<head>`.
- `php artisan sitemap:install` and `php artisan sitemap:generate` commands.
- Laravel 12 and 13 support.

[Unreleased]: https://github.com/gyvex-com/laravel-macro-sitemap/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/gyvex-com/laravel-macro-sitemap/releases/tag/v1.0.0
