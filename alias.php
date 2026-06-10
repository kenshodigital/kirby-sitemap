<?php

declare(strict_types=1);

use Kensho\Sitemap\Template\Sitemap;
use Kensho\Sitemap\Template\Sitemap\Item;

class_alias(class: Sitemap::class, alias: '\Kensho\Sitemap\View\Template\Sitemap');
class_alias(class: Item::class, alias: '\Kensho\Sitemap\View\Template\Sitemap\Item');
class_alias(class: Item\Locale::class, alias: '\Kensho\Sitemap\View\Template\Sitemap\Item\Locale');
