<?php

declare(strict_types=1);

use Kensho\Sitemap\Template\Sitemap;
use Kirby\Cms\App;
use Kirby\Cms\Page;
use Kirby\Cms\Pages;
use Kirby\Cms\Response;
use Kirby\Cms\Site;

$root = __DIR__;

App::plugin(name: 'kensho/sitemap', extends: [
	'collections' => [
		'sitemap' => fn(Site $site): Pages => $site->index()->listed(),
	],
	'controllers' => [
		'sitemap' => fn(App $kirby, Page $page): array => [
			'view' => new Sitemap(app: $kirby),
		],
	],
	'routes' => fn(App $kirby): array => [
		[
			'pattern' => 'sitemap.xml',
			'action' => fn(): Response => new Response(
				body: new Page(props: ['slug' => 'sitemap', 'template' => 'sitemap'])->render(contentType: 'xml'),
				type: 'application/xml',
			),
		],
	],
	'templates' => [
		'sitemap' => "$root/templates/sitemap.php",
		'sitemap.xml' => "$root/templates/sitemap.xml.php",
	],
]);
