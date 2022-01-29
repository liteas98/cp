<?php


namespace Liteas98\Cp;

use Illuminate\Support\ServiceProvider;

class CpInstallServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->publishes([
            __DIR__ . '/../dashboard/vuexy/app' => base_path('app'),
            __DIR__ . '/../dashboard/vuexy/public' => base_path('public'),
            __DIR__ . '/../dashboard/vuexy/resources' => base_path('resources'),
            __DIR__ . '/../dashboard/vuexy/routes' => base_path('routes')
        ], 'cp-dashboard-publishes-vuexy');
    }
}