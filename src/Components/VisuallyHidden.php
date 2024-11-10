<?php

namespace MantineBlade\Components;

class VisuallyHidden extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
