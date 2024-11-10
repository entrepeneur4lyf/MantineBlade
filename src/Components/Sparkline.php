<?php

namespace MantineBlade\Components;

class Sparkline extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $w = null,
        public mixed $h = null,
        public mixed $curveType = null,
        public mixed $color = null,
        public mixed $fillOpacity = null,
        public mixed $strokeWidth = null,
        public mixed $trendColors = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'w' => $w,
            'h' => $h,
            'curveType' => $curveType,
            'color' => $color,
            'fillOpacity' => $fillOpacity,
            'strokeWidth' => $strokeWidth,
            'trendColors' => $trendColors,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
