<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleAreaChart extends Component
{
    public $data = [
        ['date' => 'Mar 22', 'Apples' => 2890, 'Oranges' => 2338, 'Tomatoes' => 3795],
        ['date' => 'Mar 23', 'Apples' => 2756, 'Oranges' => 2103, 'Tomatoes' => 3590],
        ['date' => 'Mar 24', 'Apples' => 3322, 'Oranges' => 2194, 'Tomatoes' => 3868],
        ['date' => 'Mar 25', 'Apples' => 3470, 'Oranges' => 2108, 'Tomatoes' => 3821],
        ['date' => 'Mar 26', 'Apples' => 3129, 'Oranges' => 2986, 'Tomatoes' => 3932],
    ];

    public $splitData = [
        ['date' => 'Mar 22', 'Apples' => 50],
        ['date' => 'Mar 23', 'Apples' => -20],
        ['date' => 'Mar 24', 'Apples' => 80],
        ['date' => 'Mar 25', 'Apples' => -30],
        ['date' => 'Mar 26', 'Apples' => 60],
    ];

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <div>
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                        curve-type="linear"
                    />
                </div>

                <!-- Stacked area chart -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- Percent area chart -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="percent"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- Split area chart -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$splitData"
                        data-key="date"
                        type="split"
                        :stroke-width="1"
                        :dot-props="['r' => 2, 'strokeWidth' => 1]"
                        :active-dot-props="['r' => 3, 'strokeWidth' => 1]"
                        :series="[['name' => 'Apples', 'color' => 'bright']]"
                    />
                </div>

                <!-- With legend -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        :with-legend="true"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- With custom legend position -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        :with-legend="true"
                        :legend-props="['verticalAlign' => 'bottom', 'height' => 50]"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- With custom series labels -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        :with-legend="true"
                        :series="[
                            ['name' => 'Apples', 'label' => 'Apples sales', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'label' => 'Oranges sales', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'label' => 'Tomatoes sales', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- With point labels -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        :with-point-labels="true"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- With axis labels -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        x-axis-label="Date"
                        y-axis-label="Amount"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- With units -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        unit="$"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- With value formatter -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        :value-formatter="function ($value) {
                            return number_format($value);
                        }"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>

                <!-- With reference lines -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        :y-axis-props="['domain' => [0, 5000]]"
                        :reference-lines="[
                            ['y' => 3000, 'label' => 'Average sales', 'color' => 'red.6'],
                            ['x' => 'Mar 24', 'label' => 'Report out'],
                        ]"
                        :series="[['name' => 'Apples', 'color' => 'indigo.6']]"
                    />
                </div>

                <!-- With vertical orientation -->
                <div class="mt-8">
                    <x-mantine-area-chart
                        :h="300"
                        :data="$data"
                        data-key="date"
                        type="stacked"
                        orientation="vertical"
                        :series="[
                            ['name' => 'Apples', 'color' => 'indigo.6'],
                            ['name' => 'Oranges', 'color' => 'blue.6'],
                            ['name' => 'Tomatoes', 'color' => 'teal.6'],
                        ]"
                    />
                </div>
            </div>
        blade;
    }
}
