<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleBackgroundImage extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <div>
                    <x-mantine-box maw="300" mx="auto">
                        <x-mantine-background-image
                            src="https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/images/bg-6.png"
                            radius="sm"
                        >
                            <x-mantine-center p="md">
                                <x-mantine-text c="white">
                                    BackgroundImage component can be used to add any content on image. It is useful for hero
                                    headers and other similar sections
                                </x-mantine-text>
                            </x-mantine-center>
                        </x-mantine-background-image>
                    </x-mantine-box>
                </div>

                <!-- With different radius -->
                <div class="mt-8">
                    <x-mantine-box maw="300" mx="auto">
                        <x-mantine-background-image
                            src="https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/images/bg-6.png"
                            radius="xl"
                        >
                            <x-mantine-center p="md">
                                <x-mantine-text c="white">
                                    With extra large radius
                                </x-mantine-text>
                            </x-mantine-center>
                        </x-mantine-background-image>
                    </x-mantine-box>
                </div>

                <!-- As a link -->
                <div class="mt-8">
                    <x-mantine-box maw="300" mx="auto">
                        <x-mantine-background-image
                            component="a"
                            href="https://mantine.dev"
                            target="_blank"
                            src="https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/images/bg-6.png"
                            radius="md"
                        >
                            <x-mantine-center p="md">
                                <x-mantine-text c="white">
                                    Click me to visit Mantine website
                                </x-mantine-text>
                            </x-mantine-center>
                        </x-mantine-background-image>
                    </x-mantine-box>
                </div>

                <!-- With custom content -->
                <div class="mt-8">
                    <x-mantine-box maw="300" mx="auto">
                        <x-mantine-background-image
                            src="https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/images/bg-6.png"
                            radius="md"
                        >
                            <x-mantine-stack p="xl" justify="space-between" h="300">
                                <x-mantine-text fw="700" c="white">
                                    Header content
                                </x-mantine-text>

                                <x-mantine-group justify="space-between">
                                    <x-mantine-text c="white">
                                        Footer content
                                    </x-mantine-text>
                                    <x-mantine-button variant="white" size="xs">
                                        Action button
                                    </x-mantine-button>
                                </x-mantine-group>
                            </x-mantine-stack>
                        </x-mantine-background-image>
                    </x-mantine-box>
                </div>
            </div>
        blade;
    }
}
