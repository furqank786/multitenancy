<?php

namespace DynabicCachet\Multitenancy;

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
        $this->app->make('DynabicCachet\Multitenancy\Controllers\SiteController');
        $this->loadViewsFrom(__DIR__.'/views', 'multitenancy');
    }
}
