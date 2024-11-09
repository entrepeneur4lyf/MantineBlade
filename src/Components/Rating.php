<?php

namespace MantineBlade\Components;

class Rating extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $color = null,
        public ?string $size = null,
        public ?int $count = null,
        public ?bool $highlightSelectedOnly = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?bool $readOnly = null,
        public ?int $fractions = null,
        public mixed $emptySymbol = null,
        public mixed $fullSymbol = null,
    ) {
        parent::__construct();

        $this->props = [
            'color' => $color,
            'size' => $size,
            'count' => $count,
            'highlightSelectedOnly' => $highlightSelectedOnly,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'readOnly' => $readOnly,
            'fractions' => $fractions,
            'emptySymbol' => $emptySymbol,
            'fullSymbol' => $fullSymbol,
        ];
    }
}
