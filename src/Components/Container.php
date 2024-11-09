<?php

namespace MantineBlade\Components;

class Container extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $size = null,
        public ?string $padding = null,
        public ?bool $fluid = null,
    ) {
        parent::__construct();

        $this->props = [
            'size' => $size,
            'padding' => $padding,
            'fluid' => $fluid,
        ];
    }
}
