<?php

namespace MantineBlade\Components;

class DatesProvider extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $settings = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'settings' => $settings,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
