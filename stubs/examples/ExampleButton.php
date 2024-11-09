<?php

namespace App\View\Components;

use MantineBlade\Components\Button;

class ExampleButton extends Button
{
    public function render()
    {
        return <<<'blade'
            <div>
                <x-mantine-button
                    variant="filled"
                    color="blue"
                    size="md"
                    :loading="false"
                >
                    Click me!
                </x-mantine-button>
            </div>
        blade;
    }
}
