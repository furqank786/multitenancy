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
        $this->publishes([
            __DIR__.'/views/site/' => base_path('resources/views/dashboard/sites'),
        ]);
//        $this->publishes([
//            __DIR__.'/SiteRoutes.php' => base_path('Http/Routes/Dashboard/'),
//        ]);
        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

//        $this->publishes([
//            __DIR__.'/Requests/' => base_path('app/Requests'),
//        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Furqank786\Multitenancy\Controllers\SiteController');
        //$this->loadViewsFrom(__DIR__.'/views', 'multitenancy');

    }
}
