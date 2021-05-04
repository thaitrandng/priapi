<?php
namespace PriAPI\Providers;

use Illuminate\Support\ServiceProvider;

class PriApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }
}