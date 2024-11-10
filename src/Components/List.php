<?php

namespace MantineBlade\Components;

class MantineList extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $type = null,
        public mixed $size = null,
        public mixed $icon = null,
        public mixed $spacing = null,
        public mixed $center = null,
        public mixed $withPadding = null,
        public mixed $listStyleType = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'type' => $type,
            'size' => $size,
            'icon' => $icon,
            'spacing' => $spacing,
            'center' => $center,
            'withPadding' => $withPadding,
            'listStyleType' => $listStyleType,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class ListItem extends MantineComponent
{
    public function __construct(
        public mixed $icon = null,
    ) {
        parent::__construct();

        $this->props = [
            'icon' => $icon,
        ];
    }
}
