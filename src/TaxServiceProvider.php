<?php

namespace Dzlin\Tax;

use Illuminate\Support\ServiceProvider;

class TaxServiceProvider extends ServiceProvider
{

    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/tax.php' => config_path('tax.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/tax.php', 'tax'
        );

        $this->app->bind('tax', function ($app) {
            return new TaxCalc($app);
        });

    }
}