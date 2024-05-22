<?php

namespace PiratePixelX\Developer;

use Illuminate\Support\ServiceProvider;

class DeveloperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'developer');
    }

    public function register()
    {
        //
    }
}
