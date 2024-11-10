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

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mantine');
        
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/mantine'),
        ], 'mantine.views');

        // Register all components in the MantineBlade\Components namespace
        Blade::componentNamespace('MantineBlade\\Components', 'mantine');

        // Register the @mantineStyles directive
        Blade::directive('mantineStyles', function () {
            return '<?php echo view("mantine::styles"); ?>';
        });
    }
}
