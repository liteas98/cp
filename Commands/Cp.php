<?php
namespace Liteas98\Cp\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class Cp extends Command
{
    protected $signature = 'cp:install {dashboard}';
    protected $description = 'Install & Publish Dashboard';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle() {
        $dashboard = $this->argument('dashboard');
        if ($dashboard == 'vuexy'){
            $this->publishes(['../dashboard/vuexy/app' => base_path('app')]);
            $this->publishes(['../dashboard/vuexy/public' => base_path('public')]);
            $this->publishes(['../dashboard/vuexy/resources' => base_path('resources')]);
            $this->publishes(['../dashboard/vuexy/routes' => base_path('routes')]);
        }
    }
}