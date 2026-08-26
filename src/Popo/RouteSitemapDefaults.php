<?php

namespace GyvexCom\LaravelMacroSitemap\Popo;

use Scrumble\Popo\BasePopo;
use GyvexCom\LaravelMacroSitemap\Support\Enums\ChangeFrequency;
use GyvexCom\LaravelMacroSitemap\Sitemap\Item\Image;

class RouteSitemapDefaults extends BasePopo
{
    /**
     * @var bool
     */
    public bool $enabled = false;

    /**
     * @var array<string, string[]>
     */
    public array $parameters = [];

    /**
     * @var float|null
     */
    public ?string $priority = null;

    /**
     * @var ChangeFrequency|null
     */
    public ?ChangeFrequency $changefreq = null;

    /**
     * @var string|null
     */
    public ?string $lastmod = null;

    /**
     * @var string|null
     */
    public ?string $index = null;

    /**
     * @var Image[]
     */
    public array $images = [];
}