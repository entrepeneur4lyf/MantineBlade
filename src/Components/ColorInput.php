<?php

namespace MantineBlade\Components;

class ColorInput extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $description = null,
        public ?string $error = null,
        public ?string $placeholder = null,
        public ?string $format = null,
        public ?bool $fixOnBlur = null,
        public ?bool $disallowInput = null,
        public ?array $swatches = null,
        public ?int $swatchesPerRow = null,
        public ?bool $withPicker = null,
        public ?bool $withEyeDropper = null,
        public mixed $eyeDropperIcon = null,
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
        public ?bool $readOnly = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public ?string $leftSectionWidth = null,
        public ?string $rightSectionWidth = null,
        public ?string $value = null,
        public ?string $defaultValue = null,
        public ?bool $closeOnColorSwatchClick = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'placeholder' => $placeholder,
            'format' => $format,
            'fixOnBlur' => $fixOnBlur,
            'disallowInput' => $disallowInput,
            'swatches' => $swatches,
            'swatchesPerRow' => $swatchesPerRow,
            'withPicker' => $withPicker,
            'withEyeDropper' => $withEyeDropper,
            'eyeDropperIcon' => $eyeDropperIcon,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'disabled' => $disabled,
            'readOnly' => $readOnly,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'leftSectionWidth' => $leftSectionWidth,
            'rightSectionWidth' => $rightSectionWidth,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'closeOnColorSwatchClick' => $closeOnColorSwatchClick,
        ];
    }
}
