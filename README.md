# Kirby Sitemap

Adds an XML sitemap to [Kirby][8FBTBp] projects.

## General

The plugin adds a `/sitemap.xml` [route][sQyL6w] and returns an [XML sitemap][ZXutxz], following Google’s [best practices][w6uB9e] for [multilingual sites][fdBzZw].

## Installation

```shell
composer require kenshodigital/kirby-sitemap ^1.0
```

## Usage

Out of the box, the sitemap includes all listed pages via a `sitemap` collection. This can be easily customized [with your own collection][yBDABx], though.

```php
<?php declare(strict_types=1);

use Kirby\Cms\Pages;
use Kirby\Cms\Site;

return fn(Site $site): Pages => $site
	->index()
	->template(templates: [
		'home',
		'about',
		'contact',
		'product',
		'article',
	])
	->listed();
```

[8FBTBp]: https://getkirby.com
[sQyL6w]: https://getkirby.com/docs/guide/routing
[ZXutxz]: https://developers.google.com/search/docs/crawling-indexing/sitemaps/overview
[w6uB9e]: https://developers.google.com/search/docs/specialty/international/localized-versions#sitemap
[fdBzZw]: https://getkirby.com/docs/guide/languages
[yBDABx]: https://getkirby.com/docs/guide/templates/collections
