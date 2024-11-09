<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleCenter extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic centering -->
                <x-mantine-center>
                    <div>Centered content</div>
                </x-mantine-center>

                <!-- Inline centering -->
                <x-mantine-center :inline="true">
                    <span>Centered inline content</span>
                </x-mantine-center>

                <!-- Centering with dimensions -->
                <x-mantine-center style="width: 400px; height: 100px;">
                    <div>Content centered in a box</div>
                </x-mantine-center>
            </div>
        blade;
    }
}
