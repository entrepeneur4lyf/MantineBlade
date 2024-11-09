<?php

namespace MantineBlade\Components;

class Affix extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $position = null,
        public mixed $zIndex = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'position' => $position,
            'zIndex' => $zIndex,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
