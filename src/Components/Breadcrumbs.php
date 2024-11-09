<?php

namespace MantineBlade\Components;

class Breadcrumbs extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $separator = null,
        public mixed $separatorMargin = null,
        public mixed $classNames = null,
        public mixed $styles = null,
        public mixed $unstyled = null,
    ) {
        parent::__construct();

        $this->props = [
            'separator' => $separator,
            'separatorMargin' => $separatorMargin,
            'classNames' => $classNames,
            'styles' => $styles,
            'unstyled' => $unstyled,
        ];
    }
}
