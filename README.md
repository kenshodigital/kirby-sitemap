# Kirby Sitemap

Adds an XML sitemap to [Kirby][8FBTBp] projects.

[8FBTBp]: https://getkirby.com

## General

The plugin adds a `/sitemap.xml` route and returns an [XML sitemap][ZXutxz], following Google’s [best practices][w6uB9e] for multilingual sites.

[ZXutxz]: https://developers.google.com/search/docs/crawling-indexing/sitemaps/overview
[w6uB9e]: https://developers.google.com/search/docs/specialty/international/localized-versions#sitemap

### Further reading

- [Routes][sQyL6w]
- [Multi-language][fdBzZw]

[sQyL6w]: https://getkirby.com/docs/guide/routing
[fdBzZw]: https://getkirby.com/docs/guide/languages

## Usage

### Installation

```shell
composer require kenshodigital/kirby-sitemap ^1.0
```

### Development

#### Collection

Out of the box, the sitemap includes all listed pages via a `sitemap` collection. This can be easily customized with your own collection, though.

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

##### Further reading

- [Collections][yBDABx]

[yBDABx]: https://getkirby.com/docs/guide/templates/collections
