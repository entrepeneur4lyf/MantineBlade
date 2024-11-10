<?php

namespace MantineBlade\Components;

class BubbleChart extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $dataKey = null,
        public mixed $range = null,
        public mixed $label = null,
        public mixed $color = null,
        public mixed $h = null,
        public mixed $w = null,
        public mixed $withTooltip = null,
        public mixed $tooltipProps = null,
        public mixed $valueFormatter = null,
        public mixed $gridColor = null,
        public mixed $textColor = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'dataKey' => $dataKey,
            'range' => $range,
            'label' => $label,
            'color' => $color,
            'h' => $h,
            'w' => $w,
            'withTooltip' => $withTooltip,
            'tooltipProps' => $tooltipProps,
            'valueFormatter' => $valueFormatter,
            'gridColor' => $gridColor,
            'textColor' => $textColor,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
