<?php

namespace MantineBlade\Components;

class RadarChart extends MantineComponent
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
        public mixed $withPolarGrid = null,
        public mixed $withPolarAngleAxis = null,
        public mixed $withPolarRadiusAxis = null,
        public mixed $withLegend = null,
        public mixed $radarChartProps = null,
        public mixed $polarGridProps = null,
        public mixed $polarAngleAxisProps = null,
        public mixed $polarRadiusAxisProps = null,
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
            'withPolarGrid' => $withPolarGrid,
            'withPolarAngleAxis' => $withPolarAngleAxis,
            'withPolarRadiusAxis' => $withPolarRadiusAxis,
            'withLegend' => $withLegend,
            'radarChartProps' => $radarChartProps,
            'polarGridProps' => $polarGridProps,
            'polarAngleAxisProps' => $polarAngleAxisProps,
            'polarRadiusAxisProps' => $polarRadiusAxisProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
