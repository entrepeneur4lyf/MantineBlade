<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleBox extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <div>
                    <x-mantine-box bg="blue.5" p="xl">
                        Basic box with background and padding
                    </x-mantine-box>
                </div>

                <!-- As different HTML elements -->
                <div class="mt-8">
                    <x-mantine-box component="a" href="https://mantine.dev" target="_blank" c="blue" td="underline">
                        Box as a link
                    </x-mantine-box>

                    <x-mantine-box component="button" bg="blue.5" c="white" px="xl" py="xs" mt="md">
                        Box as a button
                    </x-mantine-box>
                </div>

                <!-- With margin and padding -->
                <div class="mt-8">
                    <x-mantine-box bg="gray.2" p="md">
                        Box with padding
                    </x-mantine-box>

                    <x-mantine-box bg="blue.2" mt="md" mx="xl" p="md">
                        Box with margin top and horizontal margins
                    </x-mantine-box>

                    <x-mantine-box bg="teal.2" my="xl" px="xl" py="xs">
                        Box with vertical margins and different horizontal/vertical padding
                    </x-mantine-box>
                </div>

                <!-- With custom styles -->
                <div class="mt-8">
                    <x-mantine-box
                        :styles="[
                            'root' => [
                                'backgroundColor' => 'var(--mantine-color-blue-light)',
                                'borderRadius' => 'var(--mantine-radius-md)',
                                'cursor' => 'pointer',
                                'transition' => 'transform 150ms ease',
                                '&:hover' => [
                                    'transform' => 'scale(1.01)',
                                ],
                            ],
                        ]"
                        p="xl"
                    >
                        Interactive box with hover effect
                    </x-mantine-box>
                </div>

                <!-- As a layout container -->
                <div class="mt-8">
                    <x-mantine-box
                        :styles="[
                            'root' => [
                                'display' => 'grid',
                                'gridTemplateColumns' => 'repeat(3, 1fr)',
                                'gap' => 'var(--mantine-spacing-md)',
                            ],
                        ]"
                    >
                        <x-mantine-box bg="blue.1" p="md">Grid item 1</x-mantine-box>
                        <x-mantine-box bg="blue.1" p="md">Grid item 2</x-mantine-box>
                        <x-mantine-box bg="blue.1" p="md">Grid item 3</x-mantine-box>
                    </x-mantine-box>
                </div>

                <!-- With responsive styles -->
                <div class="mt-8">
                    <x-mantine-box
                        p="md"
                        :styles="[
                            'root' => [
                                'backgroundColor' => 'var(--mantine-color-blue-5)',
                                'color' => 'var(--mantine-color-white)',
                                '@media (max-width: 755px)' => [
                                    'backgroundColor' => 'var(--mantine-color-red-5)',
                                ],
                            ],
                        ]"
                    >
                        This box changes color on mobile devices
                    </x-mantine-box>
                </div>
            </div>
        blade;
    }
}
