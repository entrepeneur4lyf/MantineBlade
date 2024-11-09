<?php

namespace MantineBlade;

use Illuminate\Support\ServiceProvider;
use MantineBlade\Console\Commands\InstallCommand;

class MantineBladeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/mantine.php',
            'mantine'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class
            ]);
        }

        // Config
        $this->publishes([
            __DIR__ . '/../config/mantine.php' => config_path('mantine.php'),
        ], 'mantine.config');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mantine');
        
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/mantine'),
        ], 'mantine.views');

        // Components
        $this->loadViewComponentsAs('mantine', [
            // Register your Blade components here
        ]);
    }
}