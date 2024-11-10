<?php

namespace MantineBlade\Components;

class HoverCard extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $width = null,
        public mixed $shadow = null,
        public mixed $openDelay = null,
        public mixed $closeDelay = null,
        public mixed $withArrow = null,
        public mixed $position = null,
        public mixed $offset = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'width' => $width,
            'shadow' => $shadow,
            'openDelay' => $openDelay,
            'closeDelay' => $closeDelay,
            'withArrow' => $withArrow,
            'position' => $position,
            'offset' => $offset,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class HoverCardTarget extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}

class HoverCardDropdown extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}
