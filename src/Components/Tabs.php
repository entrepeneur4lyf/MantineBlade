<?php

namespace MantineBlade\Components;

class Tabs extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public mixed $defaultValue = null,
        public mixed $onChange = null,
        public mixed $orientation = null,
        public mixed $color = null,
        public mixed $variant = null,
        public mixed $radius = null,
        public mixed $placement = null,
        public mixed $grow = null,
        public mixed $inverted = null,
        public mixed $activateTabWithKeyboard = null,
        public mixed $allowTabDeactivation = null,
        public mixed $keepMounted = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'defaultValue' => $defaultValue,
            'onChange' => $onChange,
            'orientation' => $orientation,
            'color' => $color,
            'variant' => $variant,
            'radius' => $radius,
            'placement' => $placement,
            'grow' => $grow,
            'inverted' => $inverted,
            'activateTabWithKeyboard' => $activateTabWithKeyboard,
            'allowTabDeactivation' => $allowTabDeactivation,
            'keepMounted' => $keepMounted,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
