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
        $this->commands([
            Cp::class
        ]);

        $this->publishes([
            __DIR__.'/config/dashboard.php' => config_path('dashboard.php')
        ], 'cp-config');

        $this->publishes([
            __DIR__ . '/dashboard/vuexy/app' => base_path('app'),
            __DIR__ . '/dashboard/vuexy/public' => base_path('public'),
            __DIR__ . '/dashboard/vuexy/resources' => base_path('resources'),
            __DIR__ . '/dashboard/vuexy/routes' => base_path('routes')
        ], 'cp-dashboard-publishes-vuexy');
    }
}
