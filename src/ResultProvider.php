<?php

namespace ApiResultCode;

use Illuminate\Support\ServiceProvider;

class ResultProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = realpath(__DIR__ . '/../config/result_code.php');
        $this->mergeConfigFrom($configPath, 'result_code');
        $this->publishes([$configPath => config_path('result_code.php')], 'config');
    }
}
