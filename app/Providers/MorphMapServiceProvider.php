<?php

namespace XpBar\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class MorphMapServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider
     *
     * @return void
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
        ]);
    }
}

