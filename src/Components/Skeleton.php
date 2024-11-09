<?php

namespace MantineBlade\Components;

class Skeleton extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $visible = null,
        public mixed $height = null,
        public mixed $width = null,
        public mixed $radius = null,
        public mixed $circle = null,
        public mixed $animate = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'visible' => $visible,
            'height' => $height,
            'width' => $width,
            'radius' => $radius,
            'circle' => $circle,
            'animate' => $animate,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
