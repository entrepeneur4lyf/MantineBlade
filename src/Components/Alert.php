<?php

namespace MantineBlade\Components;

class Alert extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $title = null,
        public mixed $icon = null,
        public mixed $variant = null,
        public mixed $color = null,
        public mixed $radius = null,
        public mixed $withCloseButton = null,
        public mixed $closeButtonLabel = null,
        public mixed $onClose = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'title' => $title,
            'icon' => $icon,
            'variant' => $variant,
            'color' => $color,
            'radius' => $radius,
            'withCloseButton' => $withCloseButton,
            'closeButtonLabel' => $closeButtonLabel,
            'onClose' => $onClose,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
