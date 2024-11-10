<?php

namespace MantineBlade\Components;

class Blockquote extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $cite = null,
        public mixed $icon = null,
        public mixed $iconSize = null,
        public mixed $color = null,
        public mixed $radius = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'cite' => $cite,
            'icon' => $icon,
            'iconSize' => $iconSize,
            'color' => $color,
            'radius' => $radius,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
