<?php

namespace SergeyBruhin\DynamicRobots\Providers;

use Illuminate\Support\ServiceProvider;
use SergeyBruhin\DynamicRobots\DynamicRobots;

class DynamicRobotsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'dynamic-robots');
         $this->loadViewsFrom(__DIR__.'/../../resources/views', 'dynamic-robots');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('dynamic-robots.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/dynamic-robots'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/dynamic-robots'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/dynamic-robots'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'dynamic-robots');

        // Register the main class to use with the facade
        $this->app->singleton('dynamic-robots', function () {
            return new DynamicRobots();
        });
    }
}
