<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Monetbil\Monetbil;

class MonetbilServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Monetbil', function () {
            return new Monetbil;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
