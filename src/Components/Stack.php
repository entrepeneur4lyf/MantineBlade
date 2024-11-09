<?php

namespace MantineBlade\Components;

class Stack extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $align = null,
        public ?string $justify = null,
        public ?string $gap = null,
        public ?string $h = null,
        public ?string $bg = null,
    ) {
        parent::__construct();

        $this->props = [
            'align' => $align,
            'justify' => $justify,
            'gap' => $gap,
            'h' => $h,
            'bg' => $bg,
        ];
    }
}
