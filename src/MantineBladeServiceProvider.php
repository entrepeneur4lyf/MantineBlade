<?php

namespace MantineBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use MantineBlade\Components\AppShell;
use MantineBlade\Components\AspectRatio;
use MantineBlade\Components\Button;
use MantineBlade\Components\Center;
use MantineBlade\Components\Checkbox;
use MantineBlade\Components\Chip;
use MantineBlade\Components\ColorInput;
use MantineBlade\Components\ColorPicker;
use MantineBlade\Components\Container;
use MantineBlade\Components\Fieldset;
use MantineBlade\Components\FileInput;
use MantineBlade\Components\Flex;
use MantineBlade\Components\Grid;
use MantineBlade\Components\Group;
use MantineBlade\Components\Input;
use MantineBlade\Components\JsonInput;
use MantineBlade\Components\NativeSelect;
use MantineBlade\Components\NumberInput;
use MantineBlade\Components\PasswordInput;
use MantineBlade\Components\PinInput;
use MantineBlade\Components\Radio;
use MantineBlade\Components\Rating;
use MantineBlade\Components\SegmentedControl;
use MantineBlade\Components\SimpleGrid;
use MantineBlade\Components\Slider;
use MantineBlade\Components\Space;
use MantineBlade\Components\Stack;
use MantineBlade\Components\SwitchInput;
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

        // Components
        $this->loadViewComponentsAs('mantine', [
            Button::class,
            AspectRatio::class,
            Center::class,
            Checkbox::class,
            Chip::class,
            Chip\Group::class,
            ColorInput::class,
            ColorPicker::class,
            Container::class,
            Fieldset::class,
            FileInput::class,
            Flex::class,
            Grid::class,
            Grid\Col::class,
            Group::class,
            Input::class,
            Input\Wrapper::class,
            JsonInput::class,
            NativeSelect::class,
            NumberInput::class,
            PasswordInput::class,
            PinInput::class,
            Radio::class,
            Radio\Group::class,
            Radio\Card::class,
            Radio\Indicator::class,
            Rating::class,
            SegmentedControl::class,
            SimpleGrid::class,
            Slider::class,
            Slider\Range::class,
            Space::class,
            Stack::class,
            SwitchInput::class,
            SwitchInput\Group::class,
            AppShell::class,
            AppShell\Header::class,
            AppShell\Navbar::class,
            AppShell\Aside::class,
            AppShell\Footer::class,
            AppShell\Main::class,
            AppShell\Section::class,
        ]);

        // Register the @mantineStyles directive
        Blade::directive('mantineStyles', function () {
            return '<?php echo view("mantine::styles"); ?>';
        });
    }
}
