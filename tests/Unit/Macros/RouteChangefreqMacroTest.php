<?php

use Illuminate\Support\Facades\Route;
use GyvexCom\LaravelMacroSitemap\Macros\RouteChangefreq;
use GyvexCom\LaravelMacroSitemap\Popo\RouteSitemapDefaults;
use GyvexCom\LaravelMacroSitemap\Support\Enums\ChangeFrequency;

beforeEach(function () {
    RouteChangefreq::register();

    Route::middleware('web')->group(function () {
        Route::get('/test-changefreq', fn () => 'ok')
            ->name('test.changefreq')
            ->changefreq('daily');
    });
});

it('adds changefreq to the route definition', function () {
    $route = Route::get('/test-changefreq', fn () => 'ok')
        ->name('test-changefreq')
        ->changefreq('daily');

    expect($route)->not->toBeNull();
    expect($route->defaults['sitemap'])->toBeInstanceOf(RouteSitemapDefaults::class);
    expect($route->defaults['sitemap']->changefreq)->toBe(ChangeFrequency::DAILY);
});