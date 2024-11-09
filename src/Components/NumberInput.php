<?php

namespace MantineBlade\Components;

class NumberInput extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $description = null,
        public ?string $error = null,
        public ?string $placeholder = null,
        public mixed $min = null,
        public mixed $max = null,
        public ?string $clampBehavior = null,
        public ?string $prefix = null,
        public ?string $suffix = null,
        public ?bool $allowNegative = null,
        public ?bool $allowDecimal = null,
        public ?int $decimalScale = null,
        public ?bool $fixedDecimalScale = null,
        public ?string $decimalSeparator = null,
        public ?string $thousandSeparator = null,
        public ?string $thousandsGroupStyle = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public ?string $leftSectionWidth = null,
        public ?string $rightSectionWidth = null,
        public ?string $leftSectionPointerEvents = null,
        public ?string $rightSectionPointerEvents = null,
        public ?bool $hideControls = null,
        public ?int $stepHoldDelay = null,
        public mixed $stepHoldInterval = null,
        public mixed $step = null,
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?bool $required = null,
        public ?bool $withAsterisk = null,
        public mixed $handlersRef = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'placeholder' => $placeholder,
            'min' => $min,
            'max' => $max,
            'clampBehavior' => $clampBehavior,
            'prefix' => $prefix,
            'suffix' => $suffix,
            'allowNegative' => $allowNegative,
            'allowDecimal' => $allowDecimal,
            'decimalScale' => $decimalScale,
            'fixedDecimalScale' => $fixedDecimalScale,
            'decimalSeparator' => $decimalSeparator,
            'thousandSeparator' => $thousandSeparator,
            'thousandsGroupStyle' => $thousandsGroupStyle,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'leftSectionWidth' => $leftSectionWidth,
            'rightSectionWidth' => $rightSectionWidth,
            'leftSectionPointerEvents' => $leftSectionPointerEvents,
            'rightSectionPointerEvents' => $rightSectionPointerEvents,
            'hideControls' => $hideControls,
            'stepHoldDelay' => $stepHoldDelay,
            'stepHoldInterval' => $stepHoldInterval,
            'step' => $step,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'disabled' => $disabled,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'required' => $required,
            'withAsterisk' => $withAsterisk,
            'handlersRef' => $handlersRef,
        ];
    }
}
