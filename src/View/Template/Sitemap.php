<?php declare(strict_types=1);

namespace Kensho\Sitemap\View\Template;

use Kensho\Sitemap\View\Template\Sitemap\Item;
use Kirby\Cms\App;
use Kirby\Cms\Pages;

final class Sitemap
{
	public function __construct(
		private readonly App $app,
	) {}

	public bool $hasLocales {
		get => $this->app->multilang();
	}

	/**
	 * @var Item[] $items
	 */
	public array $items {
		get {
			$pages = $this->app->collection(name: 'sitemap');
			$languages = $this->app->languages();
			$result = [];

			if ($pages instanceof Pages) {
				if ($this->hasLocales) {
					foreach ($languages as $language) {
						foreach ($pages as $page) {
							$result[] = new Item(page: $page, language: $language);
						}
					}
				} else {
					foreach ($pages as $page) {
						$result[] = new Item(page: $page);
					}
				}
			}
			return $result;
		}
	}
}
