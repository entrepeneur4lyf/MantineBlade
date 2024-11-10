<?php

namespace MantineBlade\Components;

class ScrollArea extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $type = null,
        public mixed $scrollbars = null,
        public mixed $offsetScrollbars = null,
        public mixed $scrollbarSize = null,
        public mixed $scrollHideDelay = null,
        public mixed $viewportRef = null,
        public mixed $onScrollPositionChange = null,
        public mixed $w = null,
        public mixed $h = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'type' => $type,
            'scrollbars' => $scrollbars,
            'offsetScrollbars' => $offsetScrollbars,
            'scrollbarSize' => $scrollbarSize,
            'scrollHideDelay' => $scrollHideDelay,
            'viewportRef' => $viewportRef,
            'onScrollPositionChange' => $onScrollPositionChange,
            'w' => $w,
            'h' => $h,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class ScrollAreaAutosize extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $type = null,
        public mixed $scrollbars = null,
        public mixed $offsetScrollbars = null,
        public mixed $scrollbarSize = null,
        public mixed $scrollHideDelay = null,
        public mixed $viewportRef = null,
        public mixed $onScrollPositionChange = null,
        public mixed $maxHeight = null,
        public mixed $mah = null,
        public mixed $w = null,
        public mixed $maw = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'type' => $type,
            'scrollbars' => $scrollbars,
            'offsetScrollbars' => $offsetScrollbars,
            'scrollbarSize' => $scrollbarSize,
            'scrollHideDelay' => $scrollHideDelay,
            'viewportRef' => $viewportRef,
            'onScrollPositionChange' => $onScrollPositionChange,
            'maxHeight' => $maxHeight,
            'mah' => $mah,
            'w' => $w,
            'maw' => $maw,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
