<?php

namespace MantineBlade\Components;

class Title extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $order = null,
        public mixed $size = null,
        public mixed $textWrap = null,
        public mixed $lineClamp = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'order' => $order,
            'size' => $size,
            'textWrap' => $textWrap,
            'lineClamp' => $lineClamp,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
