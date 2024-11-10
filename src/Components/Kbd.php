<?php

namespace MantineBlade\Components;

class Kbd extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $size = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'size' => $size,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
