<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleAlert extends Component
{
    public function handleClose()
    {
        $this->dispatch('notify', [
            'message' => 'Alert closed',
            'type' => 'info'
        ]);
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <x-mantine-alert
                    title="Alert title"
                    variant="light"
                    color="blue"
                    :icon="'<i class=\"fas fa-info-circle\"></i>'"
                >
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. At officiis, 
                    quae tempore necessitatibus placeat saepe.
                </x-mantine-alert>

                <!-- Different variants -->
                <div class="mt-4">
                    <x-mantine-alert
                        title="Filled variant"
                        variant="filled"
                        color="red"
                        class="mb-4"
                    >
                        This is a filled variant alert
                    </x-mantine-alert>

                    <x-mantine-alert
                        title="Light variant"
                        variant="light"
                        color="green"
                        class="mb-4"
                    >
                        This is a light variant alert
                    </x-mantine-alert>

                    <x-mantine-alert
                        title="Outline variant"
                        variant="outline"
                        color="yellow"
                        class="mb-4"
                    >
                        This is an outline variant alert
                    </x-mantine-alert>

                    <x-mantine-alert
                        title="Transparent variant"
                        variant="transparent"
                        color="grape"
                    >
                        This is a transparent variant alert
                    </x-mantine-alert>
                </div>

                <!-- With close button -->
                <div class="mt-4">
                    <x-mantine-alert
                        title="Closeable alert"
                        :with-close-button="true"
                        close-button-label="Dismiss alert"
                        :on-close="fn() => $this->handleClose()"
                    >
                        This alert can be closed
                    </x-mantine-alert>
                </div>

                <!-- Different radius -->
                <div class="mt-4">
                    <x-mantine-alert
                        title="Extra small radius"
                        radius="xs"
                        class="mb-4"
                    >
                        Alert with xs radius
                    </x-mantine-alert>

                    <x-mantine-alert
                        title="Large radius"
                        radius="lg"
                        class="mb-4"
                    >
                        Alert with lg radius
                    </x-mantine-alert>

                    <x-mantine-alert
                        title="Extra large radius"
                        radius="xl"
                    >
                        Alert with xl radius
                    </x-mantine-alert>
                </div>

                <!-- With custom icon -->
                <div class="mt-4">
                    <x-mantine-alert
                        title="Success"
                        color="teal"
                        :icon="'<i class=\"fas fa-check-circle\"></i>'"
                        class="mb-4"
                    >
                        Alert with success icon
                    </x-mantine-alert>

                    <x-mantine-alert
                        title="Warning"
                        color="yellow"
                        :icon="'<i class=\"fas fa-exclamation-triangle\"></i>'"
                        class="mb-4"
                    >
                        Alert with warning icon
                    </x-mantine-alert>

                    <x-mantine-alert
                        title="Error"
                        color="red"
                        :icon="'<i class=\"fas fa-times-circle\"></i>'"
                    >
                        Alert with error icon
                    </x-mantine-alert>
                </div>

                <!-- With custom styles -->
                <div class="mt-4">
                    <x-mantine-alert
                        title="Custom styled alert"
                        :styles="{
                            root: [
                                'border-left-width: 4px',
                                'border-left-style: solid',
                            ],
                            title: [
                                'font-size: 18px',
                                'text-transform: uppercase',
                            ],
                        }"
                    >
                        Alert with custom styles
                    </x-mantine-alert>
                </div>
            </div>
        blade;
    }
}
