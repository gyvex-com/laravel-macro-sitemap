<?php

namespace GyvexCom\LaravelMacroSitemap\Macros;

use Illuminate\Routing\Route as RoutingRoute;
use GyvexCom\LaravelMacroSitemap\Popo\RouteSitemapDefaults;

class RoutePriority
{
    /**
     * @return void
     */
    public static function register(): void
    {
        RoutingRoute::macro('priority', function (string $value) {
            /** @var RoutingRoute $this */
            $existing = $this->defaults['sitemap'] ?? new RouteSitemapDefaults();

            $existing->enabled = true;
            $existing->priority = (float) $value;

            $this->defaults['sitemap'] = $existing;

            return $this;
        });
    }
}