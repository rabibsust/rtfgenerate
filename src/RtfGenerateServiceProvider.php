<?php

namespace Rabibsust\RtfGenerator;

use Illuminate\Support\ServiceProvider;

class RtfGenerateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Rabibsust\RtfGenerator\PHPRtfLite');
    }
}
