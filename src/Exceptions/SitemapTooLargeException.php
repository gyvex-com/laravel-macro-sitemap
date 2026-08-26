<?php

namespace GyvexCom\LaravelMacroSitemap\Exceptions;

use Exception;

class SitemapTooLargeException extends Exception
{
    public function __construct(int $maxItems)
    {
        parent::__construct("Sitemap exceeds the maximum allowed number of items: {$maxItems}");
    }
}