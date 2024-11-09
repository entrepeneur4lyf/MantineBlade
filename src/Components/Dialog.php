<?php

namespace MantineBlade\Components;

class Dialog extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $opened = null,
        public mixed $position = null,
        public mixed $size = null,
        public mixed $radius = null,
        public mixed $withCloseButton = null,
        public mixed $onClose = null,
        public mixed $withBorder = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'opened' => $opened,
            'position' => $position,
            'size' => $size,
            'radius' => $radius,
            'withCloseButton' => $withCloseButton,
            'onClose' => $onClose,
            'withBorder' => $withBorder,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
