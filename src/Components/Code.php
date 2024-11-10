<?php

namespace MantineBlade\Components;

class Code extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $block = null,
        public mixed $color = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'block' => $block,
            'color' => $color,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
