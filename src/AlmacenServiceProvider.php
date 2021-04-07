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
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/AlmacenController.php' => app_path('Http/Controllers')]);
        $this->publishes([__DIR__.'/Models' => app_path('Http/Models')]);
        //$this->publishes([__DIR__.'/../views/vista.blade.php' => config_path('resources/views')]);
    }
}