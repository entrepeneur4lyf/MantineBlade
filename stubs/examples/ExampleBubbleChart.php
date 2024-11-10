<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleBubbleChart extends Component
{
    public $data = [
        ['hour' => '08:00', 'index' => 1, 'value' => 25],
        ['hour' => '10:00', 'index' => 1, 'value' => 40],
        ['hour' => '12:00', 'index' => 1, 'value' => 150],
        ['hour' => '14:00', 'index' => 1, 'value' => 80],
        ['hour' => '16:00', 'index' => 1, 'value' => 100],
        ['hour' => '18:00', 'index' => 1, 'value' => 200],
        ['hour' => '20:00', 'index' => 1, 'value' => 75],
        ['hour' => '22:00', 'index' => 1, 'value' => 50],
    ];

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <div>
                    <x-mantine-bubble-chart
                        :h="60"
                        :data="$data"
                        :range="[16, 225]"
                        label="Sales/hour"
                        color="lime.6"
                        :data-key="['x' => 'hour', 'y' => 'index', 'z' => 'value']"
                    />
                </div>

                <!-- With custom color -->
                <div class="mt-8">
                    <x-mantine-bubble-chart
                        :h="60"
                        :data="$data"
                        :range="[16, 225]"
                        :data-key="['x' => 'hour', 'y' => 'index', 'z' => 'value']"
                        color="blue"
                    />
                </div>

                <!-- With color scheme dependent color -->
                <div class="mt-8">
                    <x-mantine-bubble-chart
                        :h="60"
                        :data="$data"
                        :range="[16, 225]"
                        label="Sales/hour"
                        color="var(--scatter-color)"
                        class="root"
                        :data-key="['x' => 'hour', 'y' => 'index', 'z' => 'value']"
                    />
                </div>

                <!-- Without tooltip -->
                <div class="mt-8">
                    <x-mantine-bubble-chart
                        :h="60"
                        :data="$data"
                        :range="[16, 225]"
                        :data-key="['x' => 'hour', 'y' => 'index', 'z' => 'value']"
                        :with-tooltip="false"
                    />
                </div>

                <!-- With value formatter -->
                <div class="mt-8">
                    <x-mantine-bubble-chart
                        :h="60"
                        :data="$data"
                        :range="[16, 225]"
                        label="Sales/hour"
                        color="lime.6"
                        :data-key="['x' => 'hour', 'y' => 'index', 'z' => 'value']"
                        :value-formatter="function ($value) {
                            return number_format($value, 2) . ' USD';
                        }"
                    />
                </div>

                <!-- With custom grid and text colors -->
                <div class="mt-8">
                    <x-mantine-bubble-chart
                        :h="60"
                        :data="$data"
                        :range="[16, 225]"
                        label="Sales/hour"
                        color="lime.6"
                        grid-color="gray.5"
                        text-color="gray.9"
                        :data-key="['x' => 'hour', 'y' => 'index', 'z' => 'value']"
                    />
                </div>

                <!-- With theme-dependent colors -->
                <div class="mt-8">
                    <x-mantine-bubble-chart
                        :h="60"
                        :data="$data"
                        :range="[16, 225]"
                        label="Sales/hour"
                        color="lime.6"
                        class="root"
                        :data-key="['x' => 'hour', 'y' => 'index', 'z' => 'value']"
                    />
                </div>
            </div>
        blade;
    }
}
