<?php

namespace MantineBlade\Components;

class SegmentedControl extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public ?string $orientation = null,
        public ?bool $fullWidth = null,
        public ?bool $withItemsBorders = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?string $color = null,
        public ?int $transitionDuration = null,
        public ?string $transitionTimingFunction = null,
        public ?bool $readOnly = null,
        public ?bool $disabled = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'orientation' => $orientation,
            'fullWidth' => $fullWidth,
            'withItemsBorders' => $withItemsBorders,
            'size' => $size,
            'radius' => $radius,
            'color' => $color,
            'transitionDuration' => $transitionDuration,
            'transitionTimingFunction' => $transitionTimingFunction,
            'readOnly' => $readOnly,
            'disabled' => $disabled,
            'value' => $value,
            'defaultValue' => $defaultValue,
        ];
    }
}
