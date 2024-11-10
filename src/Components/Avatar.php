<?php

namespace MantineBlade\Components;

class Avatar extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $src = null,
        public mixed $alt = null,
        public mixed $name = null,
        public mixed $color = null,
        public mixed $variant = null,
        public mixed $radius = null,
        public mixed $size = null,
        public mixed $gradient = null,
        public mixed $allowedInitialsColors = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'src' => $src,
            'alt' => $alt,
            'name' => $name,
            'color' => $color,
            'variant' => $variant,
            'radius' => $radius,
            'size' => $size,
            'gradient' => $gradient,
            'allowedInitialsColors' => $allowedInitialsColors,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class AvatarGroup extends MantineComponent
{
    public function __construct(
        public mixed $spacing = null,
    ) {
        parent::__construct();

        $this->props = [
            'spacing' => $spacing,
        ];
    }
}
