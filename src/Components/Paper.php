<?php

namespace MantineBlade\Components;

class Paper extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $shadow = null,
        public mixed $radius = null,
        public mixed $withBorder = null,
        public mixed $p = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'shadow' => $shadow,
            'radius' => $radius,
            'withBorder' => $withBorder,
            'p' => $p,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
