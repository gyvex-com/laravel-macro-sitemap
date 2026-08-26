<?php

use Illuminate\Support\Facades\Route;
use GyvexCom\LaravelMacroSitemap\Http\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);