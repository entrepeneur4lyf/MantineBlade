<?php

namespace MantineBlade\Components;

class AspectRatio extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public float|int|null $ratio = null,
        public ?string $maw = null,  // max-width
        public ?string $mx = null,   // margin-x
    ) {
        parent::__construct();

        $this->props = [
            'ratio' => $ratio,
            'maw' => $maw,
            'mx' => $mx,
        ];
    }
}
