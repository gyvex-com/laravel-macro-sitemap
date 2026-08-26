<?php


namespace Tests\Support\Sitemap\Templates;

use Illuminate\Routing\Route;
use Tests\Support\Models\DummyModel;
use GyvexCom\LaravelMacroSitemap\Sitemap\Item\Url;
use GyvexCom\LaravelMacroSitemap\Sitemap\Template;

class AbstractTestTemplate extends Template
{
    /**
     * @param Route $route
     * @return iterable<Url>
     */
    public function generate(Route $route): iterable
    {
        yield from $this->urlsFromModel(DummyModel::class, $route);
    }
}