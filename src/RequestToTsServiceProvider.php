<?php

namespace Akoval777\RequestToTs;

use Illuminate\Support\ServiceProvider;

class RequestToTsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('akoval777.request-to-ts.console.kernel', function($app) {
            $dispatcher = $app->make(\Illuminate\Contracts\Events\Dispatcher::class);
            return new \Akoval777\RequestToTs\Console\Kernel($app, $dispatcher);
        });
        $this->app->make('akoval777.request-to-ts.console.kernel');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/request_to_ts.php' => config_path('request_to_ts.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }
}