<?php

namespace MantineBlade\Components;

class Drawer extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $opened = null,
        public mixed $onClose = null,
        public mixed $title = null,
        public mixed $position = null,
        public mixed $size = null,
        public mixed $offset = null,
        public mixed $radius = null,
        public mixed $overlayProps = null,
        public mixed $withCloseButton = null,
        public mixed $closeButtonProps = null,
        public mixed $trapFocus = null,
        public mixed $closeOnEscape = null,
        public mixed $closeOnClickOutside = null,
        public mixed $returnFocus = null,
        public mixed $scrollAreaComponent = null,
        public mixed $transitionProps = null,
        public mixed $removeScrollProps = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'opened' => $opened,
            'onClose' => $onClose,
            'title' => $title,
            'position' => $position,
            'size' => $size,
            'offset' => $offset,
            'radius' => $radius,
            'overlayProps' => $overlayProps,
            'withCloseButton' => $withCloseButton,
            'closeButtonProps' => $closeButtonProps,
            'trapFocus' => $trapFocus,
            'closeOnEscape' => $closeOnEscape,
            'closeOnClickOutside' => $closeOnClickOutside,
            'returnFocus' => $returnFocus,
            'scrollAreaComponent' => $scrollAreaComponent,
            'transitionProps' => $transitionProps,
            'removeScrollProps' => $removeScrollProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
