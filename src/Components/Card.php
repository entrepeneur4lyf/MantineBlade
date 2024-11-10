<?php

namespace MantineBlade\Components;

class Card extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $padding = null,
        public mixed $radius = null,
        public mixed $withBorder = null,
        public mixed $shadow = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'padding' => $padding,
            'radius' => $radius,
            'withBorder' => $withBorder,
            'shadow' => $shadow,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class CardSection extends MantineComponent
{
    public function __construct(
        public mixed $withBorder = null,
        public mixed $inheritPadding = null,
        public mixed $component = null,
    ) {
        parent::__construct();

        $this->props = [
            'withBorder' => $withBorder,
            'inheritPadding' => $inheritPadding,
            'component' => $component,
        ];
    }
}
