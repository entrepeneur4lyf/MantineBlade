<?php

namespace MantineBlade\Components;

class BackgroundImage extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $src = null,
        public mixed $radius = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'src' => $src,
            'radius' => $radius,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
