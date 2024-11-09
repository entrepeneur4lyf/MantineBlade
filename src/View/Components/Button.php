<?php

namespace MantineBlade\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $variant = 'filled',
        public string $size = 'sm',
        public string $color = 'blue',
        public bool $loading = false,
        public bool $disabled = false,
    ) {
    }

    public function render()
    {
        return view('mantine::components.button');
    }
}