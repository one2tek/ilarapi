<?php

namespace one2tek\ilarapi\Providers;

use one2tek\ilarapi\Routes\ApiConsumerRouter;
use Illuminate\Support\ServiceProvider as BaseProvider;
use one2tek\ilarapi\Console\ComponentMakeCommand;

class LaravelServiceProvider extends BaseProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__. '../../Config/ilarapi.php',
            'ilarapi'
        );
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__. '/../Config/ilarapi.php' => config_path('ilarapi.php'),
        ]);
        
        if ($this->app->runningInConsole()) {
            $this->commands([
                ComponentMakeCommand::class
            ]);
        }

        $this->app->singleton('apiconsumer', function () {
            $app = app();

            return new ApiConsumerRouter($app, $app['request'], $app['router']);
        });
    }
}
