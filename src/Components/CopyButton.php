<?php

namespace MantineBlade\Components;

class CopyButton extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public ?int $timeout = null,
        public mixed $onCopy = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'timeout' => $timeout,
            'onCopy' => $onCopy,
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('mantine::components.copy-button');
    }
}
