<?php

namespace MantineBlade\Components;

class Pagination extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $total = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public mixed $onChange = null,
        public mixed $siblings = null,
        public mixed $boundaries = null,
        public mixed $color = null,
        public mixed $size = null,
        public mixed $radius = null,
        public mixed $withEdges = null,
        public mixed $withControls = null,
        public mixed $disabled = null,
        public mixed $autoContrast = null,
        public mixed $getItemProps = null,
        public mixed $getControlProps = null,
        public mixed $nextIcon = null,
        public mixed $previousIcon = null,
        public mixed $firstIcon = null,
        public mixed $lastIcon = null,
        public mixed $dotsIcon = null,
    ) {
        parent::__construct();

        $this->props = [
            'total' => $total,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'onChange' => $onChange,
            'siblings' => $siblings,
            'boundaries' => $boundaries,
            'color' => $color,
            'size' => $size,
            'radius' => $radius,
            'withEdges' => $withEdges,
            'withControls' => $withControls,
            'disabled' => $disabled,
            'autoContrast' => $autoContrast,
            'getItemProps' => $getItemProps,
            'getControlProps' => $getControlProps,
            'nextIcon' => $nextIcon,
            'previousIcon' => $previousIcon,
            'firstIcon' => $firstIcon,
            'lastIcon' => $lastIcon,
            'dotsIcon' => $dotsIcon,
        ];
    }
}
