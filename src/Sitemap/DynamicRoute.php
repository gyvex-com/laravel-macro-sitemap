<?php

namespace GyvexCom\LaravelMacroSitemap\Sitemap;

use Illuminate\Support\Collection;

abstract class DynamicRoute
{
    /**
     * @return Collection<array<string, mixed>>
     */
    abstract public function parameters(): Collection;
}
