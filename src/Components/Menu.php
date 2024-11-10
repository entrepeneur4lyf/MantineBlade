<?php

namespace MantineBlade\Components;

class Menu extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $opened = null,
        public mixed $onChange = null,
        public mixed $trigger = null,
        public mixed $openDelay = null,
        public mixed $closeDelay = null,
        public mixed $loop = null,
        public mixed $closeOnItemClick = null,
        public mixed $closeOnEscape = null,
        public mixed $position = null,
        public mixed $offset = null,
        public mixed $withArrow = null,
        public mixed $transitionProps = null,
        public mixed $width = null,
        public mixed $shadow = null,
        public mixed $withinPortal = null,
        public mixed $trapFocus = null,
        public mixed $menuItemTabIndex = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'opened' => $opened,
            'onChange' => $onChange,
            'trigger' => $trigger,
            'openDelay' => $openDelay,
            'closeDelay' => $closeDelay,
            'loop' => $loop,
            'closeOnItemClick' => $closeOnItemClick,
            'closeOnEscape' => $closeOnEscape,
            'position' => $position,
            'offset' => $offset,
            'withArrow' => $withArrow,
            'transitionProps' => $transitionProps,
            'width' => $width,
            'shadow' => $shadow,
            'withinPortal' => $withinPortal,
            'trapFocus' => $trapFocus,
            'menuItemTabIndex' => $menuItemTabIndex,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class MenuTarget extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}

class MenuDropdown extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}

class MenuItem extends MantineComponent
{
    public function __construct(
        public mixed $color = null,
        public mixed $disabled = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public mixed $component = null,
    ) {
        parent::__construct();

        $this->props = [
            'color' => $color,
            'disabled' => $disabled,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'component' => $component,
        ];
    }
}

class MenuLabel extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}

class MenuDivider extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}
