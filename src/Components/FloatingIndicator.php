<?php

namespace MantineBlade\Components;

class FloatingIndicator extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $target = null,
        public mixed $parent = null,
        public mixed $transitionDuration = null,
        public mixed $transitionTimingFunction = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'target' => $target,
            'parent' => $parent,
            'transitionDuration' => $transitionDuration,
            'transitionTimingFunction' => $transitionTimingFunction,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
