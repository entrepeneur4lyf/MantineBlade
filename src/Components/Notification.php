<?php

namespace MantineBlade\Components;

class Notification extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $title = null,
        public mixed $loading = null,
        public mixed $withCloseButton = null,
        public mixed $withBorder = null,
        public mixed $icon = null,
        public mixed $color = null,
        public mixed $radius = null,
        public mixed $onClose = null,
        public mixed $closeButtonProps = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'title' => $title,
            'loading' => $loading,
            'withCloseButton' => $withCloseButton,
            'withBorder' => $withBorder,
            'icon' => $icon,
            'color' => $color,
            'radius' => $radius,
            'onClose' => $onClose,
            'closeButtonProps' => $closeButtonProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
