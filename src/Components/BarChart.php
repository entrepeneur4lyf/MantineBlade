<?php

namespace MantineBlade\Components;

class BarChart extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $dataKey = null,
        public mixed $series = null,
        public mixed $type = null,
        public mixed $h = null,
        public mixed $w = null,
        public mixed $withLegend = null,
        public mixed $legendProps = null,
        public mixed $withTooltip = null,
        public mixed $tooltipProps = null,
        public mixed $tooltipAnimationDuration = null,
        public mixed $withXAxis = null,
        public mixed $withYAxis = null,
        public mixed $xAxisProps = null,
        public mixed $yAxisProps = null,
        public mixed $gridAxis = null,
        public mixed $tickLine = null,
        public mixed $strokeDasharray = null,
        public mixed $unit = null,
        public mixed $valueFormatter = null,
        public mixed $barProps = null,
        public mixed $minBarSize = null,
        public mixed $orientation = null,
        public mixed $gridColor = null,
        public mixed $textColor = null,
        public mixed $referenceLines = null,
        public mixed $xAxisLabel = null,
        public mixed $yAxisLabel = null,
        public mixed $withBarValueLabel = null,
        public mixed $barChartProps = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'dataKey' => $dataKey,
            'series' => $series,
            'type' => $type,
            'h' => $h,
            'w' => $w,
            'withLegend' => $withLegend,
            'legendProps' => $legendProps,
            'withTooltip' => $withTooltip,
            'tooltipProps' => $tooltipProps,
            'tooltipAnimationDuration' => $tooltipAnimationDuration,
            'withXAxis' => $withXAxis,
            'withYAxis' => $withYAxis,
            'xAxisProps' => $xAxisProps,
            'yAxisProps' => $yAxisProps,
            'gridAxis' => $gridAxis,
            'tickLine' => $tickLine,
            'strokeDasharray' => $strokeDasharray,
            'unit' => $unit,
            'valueFormatter' => $valueFormatter,
            'barProps' => $barProps,
            'minBarSize' => $minBarSize,
            'orientation' => $orientation,
            'gridColor' => $gridColor,
            'textColor' => $textColor,
            'referenceLines' => $referenceLines,
            'xAxisLabel' => $xAxisLabel,
            'yAxisLabel' => $yAxisLabel,
            'withBarValueLabel' => $withBarValueLabel,
            'barChartProps' => $barChartProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
