<?php

namespace App\Providers;
namespace Laravel\Breeze;

use Illuminate\Contracts\Support\DeferrableProvider;

use Illuminate\Support\ServiceProvider;

class BreezeServiceProvider extends ServiceProvider  implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }
    public function provides()
    {
        return [Console\InstallCommand::class];
    }
}
