<?php

namespace msprj\timeprj;

use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // route
        if (! $this->app->routesAreCached()){
             require __DIR__.'/routes.php';
        }

        // view
        $this->loadViewsFrom(__DIR__.'/views', 'MyView');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/MyView'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/config.php', 'MyConfig'
        );
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('MyConfig.php'),
        ]);
    }
}
