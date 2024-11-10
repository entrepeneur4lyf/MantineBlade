<?php

namespace MantineBlade\Components;

class CompositeChart extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $dataKey = null,
        public mixed $series = null,
        public mixed $h = null,
        public mixed $w = null,
        public mixed $curveType = null,
        public mixed $connectNulls = null,
        public mixed $withDots = null,
        public mixed $withLegend = null,
        public mixed $legendProps = null,
        public mixed $withTooltip = null,
        public mixed $tooltipProps = null,
        public mixed $tooltipAnimationDuration = null,
        public mixed $withXAxis = null,
        public mixed $withYAxis = null,
        public mixed $xAxisProps = null,
        public mixed $yAxisProps = null,
        public mixed $rightYAxisProps = null,
        public mixed $withRightYAxis = null,
        public mixed $gridAxis = null,
        public mixed $tickLine = null,
        public mixed $strokeDasharray = null,
        public mixed $unit = null,
        public mixed $valueFormatter = null,
        public mixed $dotProps = null,
        public mixed $activeDotProps = null,
        public mixed $strokeWidth = null,
        public mixed $maxBarWidth = null,
        public mixed $orientation = null,
        public mixed $gridColor = null,
        public mixed $textColor = null,
        public mixed $referenceLines = null,
        public mixed $xAxisLabel = null,
        public mixed $yAxisLabel = null,
        public mixed $rightYAxisLabel = null,
        public mixed $withPointLabels = null,
        public mixed $composedChartProps = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'dataKey' => $dataKey,
            'series' => $series,
            'h' => $h,
            'w' => $w,
            'curveType' => $curveType,
            'connectNulls' => $connectNulls,
            'withDots' => $withDots,
            'withLegend' => $withLegend,
            'legendProps' => $legendProps,
            'withTooltip' => $withTooltip,
            'tooltipProps' => $tooltipProps,
            'tooltipAnimationDuration' => $tooltipAnimationDuration,
            'withXAxis' => $withXAxis,
            'withYAxis' => $withYAxis,
            'xAxisProps' => $xAxisProps,
            'yAxisProps' => $yAxisProps,
            'rightYAxisProps' => $rightYAxisProps,
            'withRightYAxis' => $withRightYAxis,
            'gridAxis' => $gridAxis,
            'tickLine' => $tickLine,
            'strokeDasharray' => $strokeDasharray,
            'unit' => $unit,
            'valueFormatter' => $valueFormatter,
            'dotProps' => $dotProps,
            'activeDotProps' => $activeDotProps,
            'strokeWidth' => $strokeWidth,
            'maxBarWidth' => $maxBarWidth,
            'orientation' => $orientation,
            'gridColor' => $gridColor,
            'textColor' => $textColor,
            'referenceLines' => $referenceLines,
            'xAxisLabel' => $xAxisLabel,
            'yAxisLabel' => $yAxisLabel,
            'rightYAxisLabel' => $rightYAxisLabel,
            'withPointLabels' => $withPointLabels,
            'composedChartProps' => $composedChartProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
