<?php

namespace MantineBlade\Components;

class Badge extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $color = null,
        public mixed $variant = null,
        public mixed $size = null,
        public mixed $radius = null,
        public mixed $gradient = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public mixed $circle = null,
        public mixed $fullWidth = null,
        public mixed $autoContrast = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'color' => $color,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'gradient' => $gradient,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'circle' => $circle,
            'fullWidth' => $fullWidth,
            'autoContrast' => $autoContrast,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
