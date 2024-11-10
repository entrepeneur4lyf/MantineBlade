<?php

namespace MantineBlade\Components;

class Spoiler extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $maxHeight = null,
        public mixed $showLabel = null,
        public mixed $hideLabel = null,
        public mixed $expanded = null,
        public mixed $onExpandedChange = null,
        public mixed $transitionDuration = null,
        public mixed $controlRef = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'maxHeight' => $maxHeight,
            'showLabel' => $showLabel,
            'hideLabel' => $hideLabel,
            'expanded' => $expanded,
            'onExpandedChange' => $onExpandedChange,
            'transitionDuration' => $transitionDuration,
            'controlRef' => $controlRef,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
