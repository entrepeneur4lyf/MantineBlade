<?php

namespace MantineBlade\Components;

class Portal extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $target = null,
        public mixed $withinPortal = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'target' => $target,
            'withinPortal' => $withinPortal,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class OptionalPortal extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $withinPortal = null,
        public mixed $target = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'withinPortal' => $withinPortal,
            'target' => $target,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
