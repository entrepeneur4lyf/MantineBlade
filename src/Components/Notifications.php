<?php

namespace MantineBlade\Components;

class Notifications extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $position = null,
        public mixed $autoClose = null,
        public mixed $limit = null,
        public mixed $zIndex = null,
        public mixed $containerWidth = null,
        public mixed $notificationMaxHeight = null,
        public mixed $transitionDuration = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'position' => $position,
            'autoClose' => $autoClose,
            'limit' => $limit,
            'zIndex' => $zIndex,
            'containerWidth' => $containerWidth,
            'notificationMaxHeight' => $notificationMaxHeight,
            'transitionDuration' => $transitionDuration,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
