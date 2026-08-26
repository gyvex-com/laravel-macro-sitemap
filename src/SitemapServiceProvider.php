<?php

namespace GyvexCom\LaravelMacroSitemap;

use Illuminate\Support\ServiceProvider;
use GyvexCom\LaravelMacroSitemap\Sitemap\Sitemap;
use GyvexCom\LaravelMacroSitemap\Macros\RouteDynamic;
use GyvexCom\LaravelMacroSitemap\Macros\RouteSitemap;
use GyvexCom\LaravelMacroSitemap\Macros\RoutePriority;
use GyvexCom\LaravelMacroSitemap\Macros\RouteChangefreq;
use GyvexCom\LaravelMacroSitemap\Macros\RouteLastmod;
use GyvexCom\LaravelMacroSitemap\Macros\RouteSitemapIndex;
use GyvexCom\LaravelMacroSitemap\Macros\RouteImage;
use GyvexCom\LaravelMacroSitemap\Services\SitemapService;
use GyvexCom\LaravelMacroSitemap\Macros\RouteSitemapUsing;
use GyvexCom\LaravelMacroSitemap\Console\Commands\InstallSitemap;
use GyvexCom\LaravelMacroSitemap\Console\Commands\TemplateSitemap;
use GyvexCom\LaravelMacroSitemap\Console\Commands\GenerateSitemap;
use GyvexCom\LaravelMacroSitemap\Console\Commands\UpdateUrlLastmod;

class SitemapServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sitemap.php', 'sitemap');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallSitemap::class,
                GenerateSitemap::class,
                TemplateSitemap::class,
                UpdateUrlLastmod::class,
            ]);
        }

        $this->app->singleton(SitemapService::class, fn () => new SitemapService(new Sitemap()));
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/sitemap.php' => config_path('sitemap.php'),
        ], 'sitemap-config');

        if (is_dir(__DIR__ . '/../database/migrations')) {
            $this->publishes([
                __DIR__ . '/../database/migrations' => database_path('migrations'),
            ], 'sitemap-migration');
        }

        if (file_exists(__DIR__ . '/../routes/web.php')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/sitemap.php');
        }

        if (is_dir(__DIR__ . '/../resources/views')) {
            $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sitemap');
        }

        RouteSitemap::register();
        RouteSitemapUsing::register();
        RoutePriority::register();
        RouteChangefreq::register();
        RouteLastmod::register();
        RouteDynamic::register();
        RouteImage::register();
        RouteSitemapIndex::register();
    }
}
