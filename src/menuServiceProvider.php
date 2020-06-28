<?php

namespace SaeedSalem\menu;

use Illuminate\Support\ServiceProvider;

class menuServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'SaeedSalem');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewComponentsAs('menus',[menu::class]);
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('menu', function ($app) {
            return new menu;
        });
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/SaeedSalem'),
        ], 'menu.views');
    }
}
