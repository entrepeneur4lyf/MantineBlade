<?php

namespace MantineBlade\Components;

class Progress extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public mixed $color = null,
        public mixed $radius = null,
        public mixed $size = null,
        public mixed $striped = null,
        public mixed $animated = null,
        public mixed $transitionDuration = null,
        public mixed $ariaLabel = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'color' => $color,
            'radius' => $radius,
            'size' => $size,
            'striped' => $striped,
            'animated' => $animated,
            'transitionDuration' => $transitionDuration,
            'aria-label' => $ariaLabel,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
