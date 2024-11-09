<?php

namespace MantineBlade\Components;

class SemiCircleProgress extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public mixed $size = null,
        public mixed $thickness = null,
        public mixed $label = null,
        public mixed $labelPosition = null,
        public mixed $fillDirection = null,
        public mixed $orientation = null,
        public mixed $filledSegmentColor = null,
        public mixed $emptySegmentColor = null,
        public mixed $transitionDuration = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'size' => $size,
            'thickness' => $thickness,
            'label' => $label,
            'labelPosition' => $labelPosition,
            'fillDirection' => $fillDirection,
            'orientation' => $orientation,
            'filledSegmentColor' => $filledSegmentColor,
            'emptySegmentColor' => $emptySegmentColor,
            'transitionDuration' => $transitionDuration,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
