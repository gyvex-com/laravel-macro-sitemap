<?php

namespace GyvexCom\LaravelMacroSitemap\Facades;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Facade;
use GyvexCom\LaravelMacroSitemap\Services\SitemapService;

/**
 * @method static SitemapService fromRoutes()
 * @method static Sitemap getSitemap()
 * @method static HtmlString meta(string|null $url = null)
 *
 * @see SitemapService
 */
class Sitemap extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return SitemapService::class;
    }
}