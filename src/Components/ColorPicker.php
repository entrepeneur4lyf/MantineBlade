<?php

namespace MantineBlade\Components;

class ColorPicker extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $format = null,
        public ?array $swatches = null,
        public ?int $swatchesPerRow = null,
        public ?string $size = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?bool $withPicker = null,
        public ?bool $fullWidth = null,
        public ?bool $onlyPicker = null,
        public ?string $saturationLabel = null,
        public ?string $hueLabel = null,
        public ?string $alphaLabel = null,
    ) {
        parent::__construct();

        $this->props = [
            'format' => $format,
            'swatches' => $swatches,
            'swatchesPerRow' => $swatchesPerRow,
            'size' => $size,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'withPicker' => $withPicker,
            'fullWidth' => $fullWidth,
            'onlyPicker' => $onlyPicker,
            'saturationLabel' => $saturationLabel,
            'hueLabel' => $hueLabel,
            'alphaLabel' => $alphaLabel,
        ];
    }
}
