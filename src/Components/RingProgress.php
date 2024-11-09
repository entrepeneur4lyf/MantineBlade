<?php

namespace MantineBlade\Components;

class RingProgress extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $sections = null,
        public mixed $label = null,
        public mixed $size = null,
        public mixed $thickness = null,
        public mixed $roundCaps = null,
        public mixed $rootColor = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'sections' => $sections,
            'label' => $label,
            'size' => $size,
            'thickness' => $thickness,
            'roundCaps' => $roundCaps,
            'rootColor' => $rootColor,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
