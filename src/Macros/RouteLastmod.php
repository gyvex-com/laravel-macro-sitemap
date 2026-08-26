<?php

namespace GyvexCom\LaravelMacroSitemap\Macros;

use DateTimeInterface;
use Illuminate\Routing\Route as RoutingRoute;
use GyvexCom\LaravelMacroSitemap\Popo\RouteSitemapDefaults;

class RouteLastmod
{
    /**
     * @return void
     */
    public static function register(): void
    {
        RoutingRoute::macro('lastmod', function (string|DateTimeInterface $date) {
            /** @var RoutingRoute $this */
            $existing = $this->defaults['sitemap'] ?? new RouteSitemapDefaults();

            $existing->enabled = true;
            $existing->lastmod = $date instanceof DateTimeInterface
                ? $date->format('Y-m-d')
                : $date;

            $this->defaults['sitemap'] = $existing;

            return $this;
        });
    }
}
