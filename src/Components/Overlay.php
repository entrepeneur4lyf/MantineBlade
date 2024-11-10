<?php

namespace MantineBlade\Components;

class Overlay extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $color = null,
        public mixed $backgroundOpacity = null,
        public mixed $gradient = null,
        public mixed $blur = null,
        public mixed $center = null,
        public mixed $fixed = null,
        public mixed $zIndex = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'color' => $color,
            'backgroundOpacity' => $backgroundOpacity,
            'gradient' => $gradient,
            'blur' => $blur,
            'center' => $center,
            'fixed' => $fixed,
            'zIndex' => $zIndex,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
