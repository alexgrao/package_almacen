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

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');

        $this->publishes([
            $this->publishes([__DIR__.'/views' => base_path('resources/views')], 'views');
        ]);
    }
}