<?php

namespace MantineBlade\Components;

class Space extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $h = null,  // vertical spacing
        public ?string $w = null,  // horizontal spacing
    ) {
        parent::__construct();

        $this->props = [
            'h' => $h,
            'w' => $w,
        ];
    }
}
