<?php

namespace MantineBlade\Components;

class Loader extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $type = null,
        public mixed $color = null,
        public mixed $size = null,
        public mixed $loaders = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'type' => $type,
            'color' => $color,
            'size' => $size,
            'loaders' => $loaders,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
