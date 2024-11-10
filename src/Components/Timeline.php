<?php

namespace MantineBlade\Components;

class Timeline extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $active = null,
        public mixed $bulletSize = null,
        public mixed $lineWidth = null,
        public mixed $color = null,
        public mixed $align = null,
        public mixed $reverseActive = null,
        public mixed $radius = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'active' => $active,
            'bulletSize' => $bulletSize,
            'lineWidth' => $lineWidth,
            'color' => $color,
            'align' => $align,
            'reverseActive' => $reverseActive,
            'radius' => $radius,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class TimelineItem extends MantineComponent
{
    public function __construct(
        public mixed $title = null,
        public mixed $bullet = null,
        public mixed $lineVariant = null,
        public mixed $radius = null,
    ) {
        parent::__construct();

        $this->props = [
            'title' => $title,
            'bullet' => $bullet,
            'lineVariant' => $lineVariant,
            'radius' => $radius,
        ];
    }
}
