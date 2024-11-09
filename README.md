# MantineBlade

A Laravel Livewire 3 component library based on Mantine UI, with React integration using Mingle.

## Features

- 🎨 Beautiful, modern UI components based on Mantine
- ⚡ Powered by Laravel Livewire 3
- ⚛️ React integration using Mingle
- 🎯 TypeScript support
- 🎭 Dark mode support
- 📱 Responsive components
- 🔧 Highly customizable

## Installation

1. Install the package via Composer:

```bash
composer require phpstack/mantine-blade
```

2. Run the installation command:

```bash
php artisan mantine-blade:install
```

This will:
- Install required PHP dependencies
- Install React and Mantine packages
- Set up Vite configuration
- Copy component stubs
- Publish configuration

3. Add the scripts stack to your layout file(s):

```blade
<!DOCTYPE html>
<html>
<head>
    <!-- ... other head elements ... -->

    @stack('scripts')
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{ $slot }}
</body>
</html>
```

4. Add the styles directive where you want to load Mantine styles:

```blade
<head>
    @mantineStyles
    <!-- ... other head elements ... -->
</head>
```

## Usage

### Basic Button Example

```blade
<x-mantine-button
    variant="filled"
    color="blue"
    size="md"
>
    Click me!
</x-mantine-button>
```

### AppShell Example

```blade
<x-mantine-app-shell
    :header="['height' => 60]"
    :navbar="[
        'width' => 300,
        'breakpoint' => 'sm',
        'collapsed' => [
            'mobile' => !$mobileOpened,
            'desktop' => !$desktopOpened
        ]
    ]"
    padding="md"
>
    <x-mantine-app-shell-header>
        <div class="flex items-center h-full px-4">
            <x-mantine-button
                variant="subtle"
                class="lg:hidden"
                wire:click="toggleMobile"
            >
                ☰
            </x-mantine-button>
            <div class="ml-4">Logo</div>
        </div>
    </x-mantine-app-shell-header>

    <x-mantine-app-shell-navbar>
        <x-mantine-app-shell-section>
            Navbar Header
        </x-mantine-app-shell-section>
        
        <x-mantine-app-shell-section grow component="ScrollArea">
            Navigation items go here
        </x-mantine-app-shell-section>
        
        <x-mantine-app-shell-section>
            Navbar Footer
        </x-mantine-app-shell-section>
    </x-mantine-app-shell-navbar>

    <x-mantine-app-shell-main>
        Main content goes here
    </x-mantine-app-shell-main>
</x-mantine-app-shell>
```

## Configuration

You can publish the configuration file using:

```bash
php artisan vendor:publish --tag="mantine.config"
```

This will create a `config/mantine.php` file where you can customize:
- Component prefix
- Default component props
- Enabled stylesheets

```php
return [
    'prefix' => '',
    'stylesheets' => [
        '@mantine/core/styles.css' => true,
        '@mantine/core/styles/Button.css' => true,
        '@mantine/core/styles/AppShell.css' => true,
        // Disable unused component styles to reduce CSS bundle size
        '@mantine/core/styles/Alert.css' => false,
    ],
    'defaults' => [
        'appshell' => [
            'padding' => 'md',
            'layout' => 'default',
            'withBorder' => true,
            'zIndex' => 200,
            'transitionDuration' => 200,
            'transitionTimingFunction' => 'ease',
            'header' => [
                'height' => 60,
                'withBorder' => true,
                'zIndex' => 200,
            ],
            'navbar' => [
                'width' => 300,
                'breakpoint' => 'sm',
                'withBorder' => true,
                'zIndex' => 200,
            ],
            // ... more defaults
        ],
    ],
];
```

## Development

### Adding New Components

1. Create a new component class in `src/Components`:

```php
namespace MantineBlade\Components;

class YourComponent extends MantineComponent
{
    public function __construct(
        // Define your props here
    ) {
        parent::__construct();
        
        $this->props = [
            // Set up your props here
        ];
    }
}
```

2. Create the React component in `stubs/js/Components/YourComponent`:

```jsx
import React from 'react';
import { YourMantineComponent } from '@mantine/core';

function YourComponent({ wire, mingleData, children }) {
    return (
        <YourMantineComponent {...mingleData}>
            {children}
        </YourMantineComponent>
    );
}

export default YourComponent;
```

3. Register the component in `MantineBladeServiceProvider.php`:

```php
$this->loadViewComponentsAs('mantine', [
    Button::class,
    YourComponent::class,
]);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
