<?php

namespace MantineBlade\Components;

class Accordion extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public mixed $defaultValue = null,
        public mixed $onChange = null,
        public mixed $multiple = null,
        public mixed $variant = null,
        public mixed $radius = null,
        public mixed $chevronPosition = null,
        public mixed $disableChevronRotation = null,
        public mixed $chevron = null,
        public mixed $order = null,
        public mixed $transitionDuration = null,
        public mixed $unstyled = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'defaultValue' => $defaultValue,
            'onChange' => $onChange,
            'multiple' => $multiple,
            'variant' => $variant,
            'radius' => $radius,
            'chevronPosition' => $chevronPosition,
            'disableChevronRotation' => $disableChevronRotation,
            'chevron' => $chevron,
            'order' => $order,
            'transitionDuration' => $transitionDuration,
            'unstyled' => $unstyled,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class AccordionItem extends MantineComponent
{
    public function __construct(
        public mixed $value = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
        ];
    }
}

class AccordionControl extends MantineComponent
{
    public function __construct(
        public mixed $icon = null,
        public mixed $disabled = null,
    ) {
        parent::__construct();

        $this->props = [
            'icon' => $icon,
            'disabled' => $disabled,
        ];
    }
}

class AccordionPanel extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}
