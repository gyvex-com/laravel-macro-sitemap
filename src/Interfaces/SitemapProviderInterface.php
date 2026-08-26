<?php

namespace GyvexCom\LaravelMacroSitemap\Interfaces;

use Illuminate\Support\Collection;

interface SitemapProviderInterface
{
    /**
     * @return Collection<\GyvexCom\LaravelMacroSitemap\Sitemap\Item\Url>
     */
    public function getUrls(): Collection;
}