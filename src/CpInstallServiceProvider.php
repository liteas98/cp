<?php


namespace Liteas98\Cp;

use Illuminate\Support\ServiceProvider;

class CpInstallServiceProvider extends ServiceProvider
{
    public function boot($dashboard){
        if ($dashboard == 'vuexy'){
            $this->publishes([__DIR__ . '/../dashboard/vuexy/app' => base_path('app')]);
            $this->publishes([__DIR__ . '/../dashboard/vuexy/public' => base_path('public')]);
            $this->publishes([__DIR__ . '/../dashboard/vuexy/resources' => base_path('resources')]);
            $this->publishes([__DIR__ . '/../dashboard/vuexy/routes' => base_path('routes')]);
        }
    }
}