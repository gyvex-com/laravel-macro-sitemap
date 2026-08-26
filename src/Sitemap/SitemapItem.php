<?php

namespace GyvexCom\LaravelMacroSitemap\Sitemap;

abstract class SitemapItem
{
    /**
     * Convert the item to an array.
     *
     * @return array<string, mixed>
     */
    abstract public function toArray(): array;
}