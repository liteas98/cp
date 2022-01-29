<?php
namespace Liteas98\Cp\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Liteas98\Cp\CpInstallServiceProvider;
use Liteas98\Cp\Int\CreateModel;

class Cp extends Command
{
    protected $signature = 'cp:install';
    protected $description = 'Install & Publish Dashboard';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle() {
        $dashboard = config('dashboard.dashboard');
        $models = config('dashboard.models');
        if ($dashboard == 'vuexy'){
            foreach ($models as $model){
                new CreateModel($model);
            }
            shell_exec('php artisan vendor:publish --tag=cp-dashboard-publishes-vuexy');
        }
    }
}