<?php

namespace Rumahdevid\ArtisanJoke\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanJokeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.rumahdevid.artisan-joke', function($app) {
            return $app['Rumahdevid\ArtisanJoke\Commands\JokeCommand'];
        });

        $this->commands('command.rumahdevid.artisan-joke');
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
