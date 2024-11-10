<?php

namespace MantineBlade\Components;

class NavigationProgress extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $initialProgress = null,
        public mixed $color = null,
        public mixed $height = null,
        public mixed $radius = null,
        public mixed $autoReset = null,
        public mixed $transitionDuration = null,
        public mixed $progressLabel = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'initialProgress' => $initialProgress,
            'color' => $color,
            'height' => $height,
            'radius' => $radius,
            'autoReset' => $autoReset,
            'transitionDuration' => $transitionDuration,
            'progressLabel' => $progressLabel,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
