<?php

namespace MantineBlade\Components;

class LoadingOverlay extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $visible = null,
        public mixed $loaderProps = null,
        public mixed $overlayProps = null,
        public mixed $zIndex = null,
        public mixed $transitionProps = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'visible' => $visible,
            'loaderProps' => $loaderProps,
            'overlayProps' => $overlayProps,
            'zIndex' => $zIndex,
            'transitionProps' => $transitionProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
