<?php

namespace MantineBlade\Components;

class Divider extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $variant = null,
        public mixed $size = null,
        public mixed $label = null,
        public mixed $labelPosition = null,
        public mixed $orientation = null,
        public mixed $my = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'variant' => $variant,
            'size' => $size,
            'label' => $label,
            'labelPosition' => $labelPosition,
            'orientation' => $orientation,
            'my' => $my,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
