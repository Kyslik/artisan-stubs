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

        $this->app->singleton('command.event.make', function ($app) {
            return new EventMakeCommand($app['files']);
        });

        $this->app->singleton('command.job.make', function ($app) {
            return new JobMakeCommand($app['files']);
        });

        $this->app->singleton('command.listener.make', function ($app) {
            return new ListenerMakeCommand($app['files']);
        });

        $this->app->singleton('command.mail.make', function ($app) {
            return new MailMakeCommand($app['files']);
        });

        $this->app->singleton('command.middleware.make', function ($app) {
            return new MiddlewareMakeCommand($app['files']);
        });

        $this->app->singleton('command.model.make', function ($app) {
            return new ModelMakeCommand($app['files']);
        });
        //TODO: check version for 5.2 and disable this one
        $this->app->singleton('command.notification.make', function ($app) {
            return new NotificationMakeCommand($app['files']);
        });

        $this->app->singleton('command.provider.make', function ($app) {
            return new ProviderMakeCommand($app['files']);
        });

        $this->app->singleton('command.request.make', function ($app) {
            return new RequestMakeCommand($app['files']);
        });

        $this->app->singleton('command.seeder.make', function ($app) {
            return new SeederMakeCommand($app['files'], $app['composer']);
        });

        $this->app->singleton('command.test.make', function ($app) {
            return new TestMakeCommand($app['files']);
        });

        $this->app->singleton('command.policy.make', function ($app) {
            return new PolicyMakeCommand($app['files']);
        });
    }

    public function provides()
    {
        return [
        'migration.creator',
        'command.console.make',
        'command.controller.make',
        'command.event.make',
        'command.job.make',
        'command.listener.make',
        'command.mail.make',
        'command.middleware.make',
        'command.model.make',
        'command.notification.make',
        'command.provider.make',
        'command.request.make',
        'command.seeder.make',
        'command.test.make',
        'command.policy.make',
        ];
    }
}
