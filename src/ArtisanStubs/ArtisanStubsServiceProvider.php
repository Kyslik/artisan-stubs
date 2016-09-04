<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Support\ServiceProvider;

class ArtisanStubsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
                __DIR__. '/../stubs' => resource_path('/stubs')
            ], 'stubs');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('migration.creator', function ($app) {
            return new MigrationCreator($app['files']);
        });

        $this->app->singleton('command.console.make', function ($app) {
            return new ConsoleMakeCommand($app['files']);
        });

        $this->app->singleton('command.controller.make', function ($app) {
            return new ControllerMakeCommand($app['files']);
        });
    }

    public function provides()
    {
        return [
        'migration.creator',
        'command.console.make',
        'command.controller.make'
        ];
    }
}
