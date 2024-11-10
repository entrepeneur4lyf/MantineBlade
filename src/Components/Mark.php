<?php

namespace MantineBlade\Components;

class Mark extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $color = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'color' => $color,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
