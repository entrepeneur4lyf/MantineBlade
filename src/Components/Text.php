<?php

namespace MantineBlade\Components;

class Text extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $size = null,
        public mixed $fw = null,
        public mixed $fs = null,
        public mixed $td = null,
        public mixed $tt = null,
        public mixed $c = null,
        public mixed $ta = null,
        public mixed $variant = null,
        public mixed $gradient = null,
        public mixed $truncate = null,
        public mixed $lineClamp = null,
        public mixed $inherit = null,
        public mixed $span = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'size' => $size,
            'fw' => $fw,
            'fs' => $fs,
            'td' => $td,
            'tt' => $tt,
            'c' => $c,
            'ta' => $ta,
            'variant' => $variant,
            'gradient' => $gradient,
            'truncate' => $truncate,
            'lineClamp' => $lineClamp,
            'inherit' => $inherit,
            'span' => $span,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
