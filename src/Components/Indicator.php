<?php

namespace MantineBlade\Components;

class Indicator extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $position = null,
        public mixed $offset = null,
        public mixed $size = null,
        public mixed $radius = null,
        public mixed $color = null,
        public mixed $disabled = null,
        public mixed $processing = null,
        public mixed $withBorder = null,
        public mixed $inline = null,
        public mixed $label = null,
        public mixed $zIndex = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'position' => $position,
            'offset' => $offset,
            'size' => $size,
            'radius' => $radius,
            'color' => $color,
            'disabled' => $disabled,
            'processing' => $processing,
            'withBorder' => $withBorder,
            'inline' => $inline,
            'label' => $label,
            'zIndex' => $zIndex,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
