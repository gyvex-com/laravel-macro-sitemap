<?php

namespace GyvexCom\LaravelMacroSitemap\Models;

use Illuminate\Database\Eloquent\Model;

class UrlMetadata extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'route_name',
        'priority',
        'lastmod'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'lastmod' => 'datetime',
    ];
}