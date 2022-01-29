<?php

namespace Liteas98\Cp;

use Illuminate\Support\ServiceProvider;
use Liteas98\Cp\Commands\Cp;

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
            return new Cp();
        });

        $this->commands([
            Cp::class
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
