<?php

namespace MantineBlade\Components;

class PieChart extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $size = null,
        public mixed $withTooltip = null,
        public mixed $tooltipDataSource = null,
        public mixed $withLabels = null,
        public mixed $withLabelsLine = null,
        public mixed $labelsPosition = null,
        public mixed $labelsType = null,
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
            'withTooltip' => $withTooltip,
            'tooltipDataSource' => $tooltipDataSource,
            'withLabels' => $withLabels,
            'withLabelsLine' => $withLabelsLine,
            'labelsPosition' => $labelsPosition,
            'labelsType' => $labelsType,
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
