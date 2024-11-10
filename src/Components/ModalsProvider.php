<?php

namespace MantineBlade\Components;

class ModalsProvider extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $modals = null,
        public mixed $modalProps = null,
        public mixed $labels = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'modals' => $modals,
            'modalProps' => $modalProps,
            'labels' => $labels,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
