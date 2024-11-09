<?php

namespace MantineBlade\Components;

class NativeSelect extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $description = null,
        public ?string $error = null,
        public ?string $placeholder = null,
        public mixed $data = null,
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public ?string $leftSectionWidth = null,
        public ?string $rightSectionWidth = null,
        public ?string $leftSectionPointerEvents = null,
        public ?string $rightSectionPointerEvents = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?bool $required = null,
        public ?bool $withAsterisk = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'placeholder' => $placeholder,
            'data' => $data,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'disabled' => $disabled,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'leftSectionWidth' => $leftSectionWidth,
            'rightSectionWidth' => $rightSectionWidth,
            'leftSectionPointerEvents' => $leftSectionPointerEvents,
            'rightSectionPointerEvents' => $rightSectionPointerEvents,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'required' => $required,
            'withAsterisk' => $withAsterisk,
        ];
    }
}
