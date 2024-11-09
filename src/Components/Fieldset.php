<?php

namespace MantineBlade\Components;

class Fieldset extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $legend = null,
        public ?string $variant = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
    ) {
        parent::__construct();

        $this->props = [
            'legend' => $legend,
            'variant' => $variant,
            'radius' => $radius,
            'disabled' => $disabled,
        ];
    }
}
