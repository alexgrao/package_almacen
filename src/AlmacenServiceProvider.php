<?php

namespace Alexgrao\PackageAlmacen;

use Illuminate\Support\ServiceProvider;

class AlmacenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Alexgrao\PackageAlmacen\AlmacenController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator'); 

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
