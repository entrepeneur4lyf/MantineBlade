<?php

namespace MantineBlade\Components;

class Tooltip extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $label = null,
        public mixed $color = null,
        public mixed $position = null,
        public mixed $offset = null,
        public mixed $withArrow = null,
        public mixed $arrowSize = null,
        public mixed $arrowRadius = null,
        public mixed $arrowPosition = null,
        public mixed $arrowOffset = null,
        public mixed $opened = null,
        public mixed $events = null,
        public mixed $multiline = null,
        public mixed $width = null,
        public mixed $inline = null,
        public mixed $transitionProps = null,
        public mixed $openDelay = null,
        public mixed $closeDelay = null,
        public mixed $refProp = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'color' => $color,
            'position' => $position,
            'offset' => $offset,
            'withArrow' => $withArrow,
            'arrowSize' => $arrowSize,
            'arrowRadius' => $arrowRadius,
            'arrowPosition' => $arrowPosition,
            'arrowOffset' => $arrowOffset,
            'opened' => $opened,
            'events' => $events,
            'multiline' => $multiline,
            'width' => $width,
            'inline' => $inline,
            'transitionProps' => $transitionProps,
            'openDelay' => $openDelay,
            'closeDelay' => $closeDelay,
            'refProp' => $refProp,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class TooltipGroup extends MantineComponent
{
    public function __construct(
        public mixed $openDelay = null,
        public mixed $closeDelay = null,
    ) {
        parent::__construct();

        $this->props = [
            'openDelay' => $openDelay,
            'closeDelay' => $closeDelay,
        ];
    }
}

class TooltipFloating extends MantineComponent
{
    public function __construct(
        public mixed $label = null,
        public mixed $color = null,
        public mixed $offset = null,
        public mixed $position = null,
        public mixed $withArrow = null,
        public mixed $arrowSize = null,
        public mixed $arrowRadius = null,
        public mixed $arrowPosition = null,
        public mixed $arrowOffset = null,
        public mixed $transitionProps = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'color' => $color,
            'offset' => $offset,
            'position' => $position,
            'withArrow' => $withArrow,
            'arrowSize' => $arrowSize,
            'arrowRadius' => $arrowRadius,
            'arrowPosition' => $arrowPosition,
            'arrowOffset' => $arrowOffset,
            'transitionProps' => $transitionProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
