<?php
namespace Liteas98\Cp\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Liteas98\Cp\CpInstallServiceProvider;

class Cp extends Command
{
    protected $signature = 'cp:install';
    protected $description = 'Install & Publish Dashboard';

//    public function __construct($app)
//    {
//        $this->app = $app;
//    }

    public function handle() {
        $dashboard = config('dashboard.dashboard');
        (new \Liteas98\Cp\CpInstallServiceProvider)->boot($dashboard);
    }
}