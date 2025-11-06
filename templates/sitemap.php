<?php declare(strict_types=1);

use Kensho\Sitemap\View\Template\Sitemap;

/**
 * @var Sitemap $view
 */
?>
<?php if ($view->hasLocales): ?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
		<?php foreach ($view->items as $item): ?>
			<url>
				<loc>
					<?= $item->url ?>
				</loc>
				<?php foreach ($item->locales as $locale): ?>
					<xhtml:link href="<?= $locale->url ?>" hreflang="<?= $locale->code ?>" rel="alternate"/>
				<?php endforeach; ?>
				<xhtml:link href="<?= $item->default ?>" hreflang="x-default" rel="alternate"/>
			</url>
		<?php endforeach; ?>
	</urlset>
<?php else: ?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
		<?php foreach ($view->items as $item): ?>
			<url>
				<loc>
					<?= $item->url ?>
				</loc>
			</url>
		<?php endforeach; ?>
	</urlset>
<?php endif;
