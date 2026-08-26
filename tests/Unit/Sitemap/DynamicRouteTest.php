<?php

use Illuminate\Support\Collection;
use GyvexCom\LaravelMacroSitemap\Sitemap\DynamicRoute;
use GyvexCom\LaravelMacroSitemap\Sitemap\DynamicRouteChild;
use GyvexCom\LaravelMacroSitemap\Sitemap\StaticDynamicRoute;

it('can create a DynamicRouteChild with parameters and retrieve them', function () {
    $params = ['slug' => 'test'];
    $child = DynamicRouteChild::make($params);

    expect($child->parameters())->toBe($params);
});

it('StaticDynamicRoute returns all parameter sets from children', function () {
    $children = [
        DynamicRouteChild::make(['slug' => 'a']),
        DynamicRouteChild::make(['slug' => 'b']),
    ];

    $route = new StaticDynamicRoute($children);
    $parameters = $route->parameters();

    expect($parameters)->toBeInstanceOf(Collection::class)
                       ->and($parameters)->toHaveCount(2)
                       ->and($parameters->pluck('slug'))->toEqual(collect(['a', 'b']));
});

it('DynamicRoute is abstract and must be extended', function () {
    expect(DynamicRoute::class)->toBeAbstract();
});
