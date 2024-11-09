<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleAnchor extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <x-mantine-anchor
                    href="https://mantine.dev/"
                    target="_blank"
                >
                    Anchor component
                </x-mantine-anchor>

                <!-- Different underline styles -->
                <div class="mt-4">
                    <x-mantine-group justify="center">
                        <x-mantine-anchor
                            href="https://mantine.dev/"
                            target="_blank"
                            underline="always"
                        >
                            Underline always
                        </x-mantine-anchor>

                        <x-mantine-anchor
                            href="https://mantine.dev/"
                            target="_blank"
                            underline="hover"
                        >
                            Underline hover
                        </x-mantine-anchor>

                        <x-mantine-anchor
                            href="https://mantine.dev/"
                            target="_blank"
                            underline="never"
                        >
                            Underline never
                        </x-mantine-anchor>
                    </x-mantine-group>
                </div>

                <!-- With gradient -->
                <div class="mt-4">
                    <x-mantine-anchor
                        variant="gradient"
                        :gradient="['from' => 'pink', 'to' => 'yellow']"
                        :fw="500"
                        fz="lg"
                        href="#gradient-example"
                    >
                        A link with pink to yellow gradient
                    </x-mantine-anchor>
                </div>

                <!-- With custom component -->
                <div class="mt-4">
                    <x-mantine-anchor
                        component="button"
                        :on-click="fn() => $this->handleClick()"
                    >
                        Button styled as link
                    </x-mantine-anchor>
                </div>

                <!-- With text props -->
                <div class="mt-4">
                    <x-mantine-anchor
                        href="#text-props"
                        fz="xl"
                        fw="bold"
                        tt="uppercase"
                    >
                        Large bold uppercase link
                    </x-mantine-anchor>
                </div>

                <!-- With custom styles -->
                <div class="mt-4">
                    <x-mantine-anchor
                        href="#custom-styles"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors"
                        underline="never"
                    >
                        Custom styled link
                    </x-mantine-anchor>
                </div>

                <!-- With rel attribute -->
                <div class="mt-4">
                    <x-mantine-anchor
                        href="https://external-site.com"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        External link with security attributes
                    </x-mantine-anchor>
                </div>

                <!-- Different sizes -->
                <div class="mt-4">
                    <x-mantine-group>
                        <x-mantine-anchor href="#" size="xs">Extra small link</x-mantine-anchor>
                        <x-mantine-anchor href="#" size="sm">Small link</x-mantine-anchor>
                        <x-mantine-anchor href="#" size="md">Medium link</x-mantine-anchor>
                        <x-mantine-anchor href="#" size="lg">Large link</x-mantine-anchor>
                        <x-mantine-anchor href="#" size="xl">Extra large link</x-mantine-anchor>
                    </x-mantine-group>
                </div>
            </div>
        blade;
    }

    public function handleClick()
    {
        // Handle click event
        $this->dispatch('notify', [
            'message' => 'Button clicked!',
            'type' => 'success'
        ]);
    }
}
