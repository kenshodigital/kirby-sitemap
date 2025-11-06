<?php declare(strict_types=1);

namespace Kensho\Sitemap\View\Template\Sitemap;

use Kensho\Sitemap\View\Template\Sitemap\Item\Locale;
use Kirby\Cms\App;
use Kirby\Cms\Language;
use Kirby\Cms\Page;

final class Item
{
	private readonly App $app;

	public function __construct(
		private readonly Page $page,
		private readonly Language|null $language = null,
	) {
		$this->app = $page->kirby();
	}

	public string $url {
		get => $this->page->url(options: $this->language?->code());
	}

	/**
	 * @var Locale[]
	 */
	public array $locales {
		get => $this->app
			->languages()
			->toArray(map: fn(Language $language): Locale => new Locale(page: $this->page, language: $language));
	}

	public string $default {
		get => $this->page->url(options: $this->app->defaultLanguage()?->code());
	}
}
