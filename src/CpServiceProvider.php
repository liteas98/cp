<?php

namespace Liteas98\Cp;

use Illuminate\Support\ServiceProvider;

class CpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.cp.install', function ($app) {
            return new Commands\Cp;
        });

        $this->commands([
            Commands\Cp::class
        ]);
    }

    public function provides() {
        return [
            'command.cp.install'
        ];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
