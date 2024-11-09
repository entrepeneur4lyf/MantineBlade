<?php

namespace MantineBlade\Components;

class FileButton extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $onChange = null,
        public mixed $accept = null,
        public ?bool $multiple = null,
        public mixed $resetRef = null,
        public mixed $name = null,
        public mixed $form = null,
        public mixed $capture = null,
        public mixed $disabled = null,
    ) {
        parent::__construct();

        $this->props = [
            'onChange' => $onChange,
            'accept' => $accept,
            'multiple' => $multiple,
            'resetRef' => $resetRef,
            'name' => $name,
            'form' => $form,
            'capture' => $capture,
            'disabled' => $disabled,
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('mantine::components.file-button');
    }
}
