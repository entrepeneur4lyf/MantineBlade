<?php

namespace MantineBlade\Components;

class Carousel extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $slideSize = null,
        public mixed $slideGap = null,
        public mixed $orientation = null,
        public mixed $slidesToScroll = null,
        public mixed $align = null,
        public mixed $breakpoints = null,
        public mixed $dragFree = null,
        public mixed $draggable = null,
        public mixed $loop = null,
        public mixed $withControls = null,
        public mixed $withIndicators = null,
        public mixed $controlsOffset = null,
        public mixed $controlSize = null,
        public mixed $nextControlIcon = null,
        public mixed $previousControlIcon = null,
        public mixed $height = null,
        public mixed $includeGapInSize = null,
        public mixed $containScroll = null,
        public mixed $plugins = null,
        public mixed $initialSlide = null,
        public mixed $getEmblaApi = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'slideSize' => $slideSize,
            'slideGap' => $slideGap,
            'orientation' => $orientation,
            'slidesToScroll' => $slidesToScroll,
            'align' => $align,
            'breakpoints' => $breakpoints,
            'dragFree' => $dragFree,
            'draggable' => $draggable,
            'loop' => $loop,
            'withControls' => $withControls,
            'withIndicators' => $withIndicators,
            'controlsOffset' => $controlsOffset,
            'controlSize' => $controlSize,
            'nextControlIcon' => $nextControlIcon,
            'previousControlIcon' => $previousControlIcon,
            'height' => $height,
            'includeGapInSize' => $includeGapInSize,
            'containScroll' => $containScroll,
            'plugins' => $plugins,
            'initialSlide' => $initialSlide,
            'getEmblaApi' => $getEmblaApi,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
