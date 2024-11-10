<?php

namespace MantineBlade\Components;

class Image extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $src = null,
        public mixed $alt = null,
        public mixed $height = null,
        public mixed $width = null,
        public mixed $radius = null,
        public mixed $fit = null,
        public mixed $fallbackSrc = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'src' => $src,
            'alt' => $alt,
            'height' => $height,
            'width' => $width,
            'radius' => $radius,
            'fit' => $fit,
            'fallbackSrc' => $fallbackSrc,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
