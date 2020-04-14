<?php

namespace Mrlinnth\Mmrc;

use Illuminate\Support\ServiceProvider;

class MmrcServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $publishablePath = dirname(__DIR__) . '/publishable';

        $this->loadRoutesFrom(dirname(__DIR__) . '/routes/api.php');

        $this->loadRoutesFrom(dirname(__DIR__) . '/routes/web.php');

        if ($this->app->runningInConsole()) {

            $this->loadMigrationsFrom(dirname(__DIR__) . '/database/migrations');

            $this->publishes([
                $publishablePath . '/config/mmrc.php' => config_path('mmrc.php'),
            ], 'mmrc');

        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/publishable/config/mmrc.php', 'mmrc');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        //
    }

}
