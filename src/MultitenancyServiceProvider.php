<?php

namespace Furqank786\Multitenancy;

use Illuminate\Support\ServiceProvider;

class MultitenancyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Furqank786\Multitenancy\Controllers\SiteController');
        $this->loadViewsFrom(__DIR__.'/views', 'multitenancy');
    }
}
