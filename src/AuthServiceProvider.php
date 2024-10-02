<?php

namespace Ravuthz\LaravelAuth;

use Illuminate\Support\ServiceProvider;
use Ravuthz\LaravelCrud\Console\Commands\CrudCommand;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AuthService::class, function () {
            return new AuthService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Perform any booting actions here
    }
}
