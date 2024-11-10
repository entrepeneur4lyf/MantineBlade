<?php

namespace MantineBlade\Components;

class Transition extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $mounted = null,
        public mixed $transition = null,
        public mixed $duration = null,
        public mixed $timingFunction = null,
        public mixed $enterDelay = null,
        public mixed $exitDelay = null,
        public mixed $keepMounted = null,
        public mixed $onEnter = null,
        public mixed $onExit = null,
        public mixed $onEntered = null,
        public mixed $onExited = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'mounted' => $mounted,
            'transition' => $transition,
            'duration' => $duration,
            'timingFunction' => $timingFunction,
            'enterDelay' => $enterDelay,
            'exitDelay' => $exitDelay,
            'keepMounted' => $keepMounted,
            'onEnter' => $onEnter,
            'onExit' => $onExit,
            'onEntered' => $onEntered,
            'onExited' => $onExited,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
