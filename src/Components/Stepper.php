<?php

namespace MantineBlade\Components;

class Stepper extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $active = null,
        public mixed $color = null,
        public mixed $radius = null,
        public mixed $size = null,
        public mixed $iconSize = null,
        public mixed $orientation = null,
        public mixed $iconPosition = null,
        public mixed $completedIcon = null,
        public mixed $allowNextStepsSelect = null,
        public mixed $onStepClick = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'active' => $active,
            'color' => $color,
            'radius' => $radius,
            'size' => $size,
            'iconSize' => $iconSize,
            'orientation' => $orientation,
            'iconPosition' => $iconPosition,
            'completedIcon' => $completedIcon,
            'allowNextStepsSelect' => $allowNextStepsSelect,
            'onStepClick' => $onStepClick,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
