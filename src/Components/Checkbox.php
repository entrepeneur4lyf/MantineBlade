<?php

namespace MantineBlade\Components;

class Checkbox extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $description = null,
        public ?string $error = null,
        public ?string $color = null,
        public ?string $variant = null,
        public ?string $radius = null,
        public ?string $size = null,
        public ?bool $disabled = null,
        public ?bool $indeterminate = null,
        public ?string $labelPosition = null,
        public ?string $iconColor = null,
        public ?bool $checked = null,
        public ?bool $defaultChecked = null,
        public ?string $wrapperProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'color' => $color,
            'variant' => $variant,
            'radius' => $radius,
            'size' => $size,
            'disabled' => $disabled,
            'indeterminate' => $indeterminate,
            'labelPosition' => $labelPosition,
            'iconColor' => $iconColor,
            'checked' => $checked,
            'defaultChecked' => $defaultChecked,
            'wrapperProps' => $wrapperProps,
        ];
    }
}
