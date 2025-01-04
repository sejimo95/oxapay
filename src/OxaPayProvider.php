<?php

namespace Sejimo\OxaPay;

use Illuminate\Support\ServiceProvider;
use Sejimo\OxaPay\Facades\OxaPayCore;

class OxaPayProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // oxapay facade
        $this->app->singleton('oxapay', function($app) {
            return new OxaPayCore();
        });

        // config
        $this->mergeConfigFrom(__DIR__ . '/../config/oxapay.php', 'oxapay');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // config
        $this->publishes([
            __DIR__.'/../config/oxapay.php' => config_path('oxapay.php'),
        ], 'oxapay-config');

        // language
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'oxapay');
        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/oxapay'),
        ]);

    }
}
