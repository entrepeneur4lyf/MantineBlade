<?php

namespace MantineBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use MantineBlade\Console\Commands\MantineInstallCommand;

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
        // Register React refresh in local development
        if ($this->app->environment('local')) {
            \Filament\Support\Facades\FilamentView::registerRenderHook(
                'panels::head.start',
                fn() => app(\Illuminate\Foundation\Vite::class)->reactRefresh()
            );
        }

        // Commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                MantineInstallCommand::class
            ]);
        }

        // Config
        $this->publishes([
            __DIR__ . '/../config/mantine.php' => config_path('mantine.php'),
        ], 'mantine.config');

        // Register all components in the MantineBlade\Components namespace
        Blade::componentNamespace('MantineBlade\\Components', 'mantine');

        // Register Livewire event listeners for Mantine hooks
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::listen('component.initialized', function ($component) {
                if (in_array(\MantineBlade\Traits\WithMantineHooks::class, class_uses_recursive($component))) {
                    $component->bootWithMantineHooks();
                }
            });
        }
    }
}
