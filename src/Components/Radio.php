<?php

namespace MantineBlade\Components;

class Radio extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $description = null,
        public mixed $error = null,
        public ?string $labelPosition = null,
        public ?string $size = null,
        public ?string $color = null,
        public ?string $variant = null,
        public ?bool $checked = null,
        public mixed $icon = null,
        public ?string $iconColor = null,
        public ?bool $disabled = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public mixed $wrapperProps = null,
        public ?string $name = null,
        public ?string $ariaLabel = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'labelPosition' => $labelPosition,
            'size' => $size,
            'color' => $color,
            'variant' => $variant,
            'checked' => $checked,
            'icon' => $icon,
            'iconColor' => $iconColor,
            'disabled' => $disabled,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'wrapperProps' => $wrapperProps,
            'name' => $name,
            'aria-label' => $ariaLabel,
        ];
    }
}
