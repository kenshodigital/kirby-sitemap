<?php declare(strict_types=1);

namespace Kensho\Sitemap\View\Template\Sitemap\Item;

use Kirby\Cms\Language;
use Kirby\Cms\Page;

final class Locale
{
	public function __construct(
		private readonly Page $page,
		private readonly Language $language,
	) {}

	public string $url {
		get => $this->page->url(options: $this->language->code());
	}

	public string $code {
		get => $this->language->code();
	}
}
