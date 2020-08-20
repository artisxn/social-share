<?php

namespace codicastudio\Share\Providers;

use Illuminate\Support\ServiceProvider;
use codicastudio\Share\Share;

class ShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang/', 'social-share');

        $this->publishes([
            __DIR__ . '/../../config/social-share.php' => config_path('social-share.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../../public/js/share.js' => public_path('js/share.js'),
        ], 'assets');

        $this->publishes([
            __DIR__ . '/../../resources/lang/' => resource_path('lang/vendor/social-share'),
        ], 'translations');

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('share', function () {
            return new Share();
        });

        $this->mergeConfigFrom(__DIR__ . '/../../config/social-share.php', 'social-share');
    }
}
