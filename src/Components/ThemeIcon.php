<?php

namespace MantineBlade\Components;

class ThemeIcon extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $size = null,
        public mixed $radius = null,
        public mixed $variant = null,
        public mixed $gradient = null,
        public mixed $color = null,
        public mixed $autoContrast = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'size' => $size,
            'radius' => $radius,
            'variant' => $variant,
            'gradient' => $gradient,
            'color' => $color,
            'autoContrast' => $autoContrast,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
