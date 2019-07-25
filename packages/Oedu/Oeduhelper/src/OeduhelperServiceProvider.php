<?php

namespace Oedu\Oeduhelper;

use Illuminate\Support\ServiceProvider;

class OeduhelperServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'oedu');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'oedu');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/oeduhelper.php', 'oeduhelper');

        // Register the service the package provides.
        $this->app->singleton('oeduhelper', function ($app) {
            return new Oeduhelper;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['oeduhelper'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/oeduhelper.php' => config_path('oeduhelper.php'),
        ], 'oeduhelper.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/oedu'),
        ], 'oeduhelper.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/oedu'),
        ], 'oeduhelper.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/oedu'),
        ], 'oeduhelper.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
