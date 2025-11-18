<?php declare(strict_types=1);

use Kensho\Sitemap\View\Template\Sitemap;
use Kirby\Cms\App;
use Kirby\Cms\Pages;
use Kirby\Cms\Response;
use Kirby\Cms\Site;

$root = __DIR__;

App::plugin(name: 'kensho/sitemap', extends: [
	'collections' => [
		'sitemap' => fn(Site $site): Pages => $site->index()->listed(),
	],
	'routes' => fn(App $kirby): array => [
		[
			'pattern' => 'sitemap.xml',
			'action' => fn(): Response => new Response(body: $kirby
				->template(name: 'sitemap', type: 'xml', defaultType: 'xml')
				->render(data: [
					'view' => new Sitemap(app: $kirby),
				]), type: 'application/xml'),
		],
	],
	'templates' => [
		'sitemap' => "$root/templates/sitemap.php",
	],
]);
