<?php

namespace MantineBlade\Components;

class Chip extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $color = null,
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $checked = null,
        public ?bool $defaultChecked = null,
        public ?bool $disabled = null,
        public mixed $value = null,
        public mixed $icon = null,
        public ?string $wrapperProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'color' => $color,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'checked' => $checked,
            'defaultChecked' => $defaultChecked,
            'disabled' => $disabled,
            'value' => $value,
            'icon' => $icon,
            'wrapperProps' => $wrapperProps,
        ];
    }
}
