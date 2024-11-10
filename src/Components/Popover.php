<?php

namespace MantineBlade\Components;

class Popover extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $opened = null,
        public mixed $onChange = null,
        public mixed $width = null,
        public mixed $position = null,
        public mixed $offset = null,
        public mixed $withArrow = null,
        public mixed $arrowSize = null,
        public mixed $arrowRadius = null,
        public mixed $arrowPosition = null,
        public mixed $arrowOffset = null,
        public mixed $middlewares = null,
        public mixed $disabled = null,
        public mixed $trapFocus = null,
        public mixed $closeOnEscape = null,
        public mixed $closeOnClickOutside = null,
        public mixed $clickOutsideEvents = null,
        public mixed $shadow = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'opened' => $opened,
            'onChange' => $onChange,
            'width' => $width,
            'position' => $position,
            'offset' => $offset,
            'withArrow' => $withArrow,
            'arrowSize' => $arrowSize,
            'arrowRadius' => $arrowRadius,
            'arrowPosition' => $arrowPosition,
            'arrowOffset' => $arrowOffset,
            'middlewares' => $middlewares,
            'disabled' => $disabled,
            'trapFocus' => $trapFocus,
            'closeOnEscape' => $closeOnEscape,
            'closeOnClickOutside' => $closeOnClickOutside,
            'clickOutsideEvents' => $clickOutsideEvents,
            'shadow' => $shadow,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class PopoverTarget extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}

class PopoverDropdown extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}
