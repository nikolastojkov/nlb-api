<?php

namespace NikolaStojkov\NLBKlik;

use Illuminate\Support\ServiceProvider;
use NikolaStojkov\NLBKlik\Console\NLBKlikInit;

class NLBKlikServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('nlbklik', function($app) {
            return new NLBKlik();
        });

    }

    public function boot()
    {
        // Register artisan commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                NLBKlikInit::class,
            ]);
        }
    }
}

