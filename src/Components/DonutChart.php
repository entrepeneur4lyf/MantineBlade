<?php

namespace MantineBlade\Components;

class DonutChart extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $size = null,
        public mixed $thickness = null,
        public mixed $paddingAngle = null,
        public mixed $withTooltip = null,
        public mixed $tooltipDataSource = null,
        public mixed $withLabels = null,
        public mixed $withLabelsLine = null,
        public mixed $chartLabel = null,
        public mixed $startAngle = null,
        public mixed $endAngle = null,
        public mixed $strokeWidth = null,
        public mixed $strokeColor = null,
        public mixed $h = null,
        public mixed $w = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'size' => $size,
            'thickness' => $thickness,
            'paddingAngle' => $paddingAngle,
            'withTooltip' => $withTooltip,
            'tooltipDataSource' => $tooltipDataSource,
            'withLabels' => $withLabels,
            'withLabelsLine' => $withLabelsLine,
            'chartLabel' => $chartLabel,
            'startAngle' => $startAngle,
            'endAngle' => $endAngle,
            'strokeWidth' => $strokeWidth,
            'strokeColor' => $strokeColor,
            'h' => $h,
            'w' => $w,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
