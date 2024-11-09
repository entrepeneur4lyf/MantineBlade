<?php

namespace MantineBlade\Components;

/**
 * Class SwitchInput
 * @package MantineBlade\Components
 * @link https://mantine.dev/core/switch/
 * Name changed due to reserved word in PHP
 */
class SwitchInput extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $checked = null,
        public mixed $defaultChecked = null,
        public ?string $label = null,
        public ?string $description = null,
        public mixed $error = null,
        public ?string $labelPosition = null,
        public ?string $color = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
        public ?string $onLabel = null,
        public ?string $offLabel = null,
        public mixed $thumbIcon = null,
        public mixed $wrapperProps = null,
        public mixed $value = null,
        public ?string $ariaLabel = null,
    ) {
        parent::__construct();

        $this->props = [
            'checked' => $checked,
            'defaultChecked' => $defaultChecked,
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'labelPosition' => $labelPosition,
            'color' => $color,
            'size' => $size,
            'radius' => $radius,
            'disabled' => $disabled,
            'onLabel' => $onLabel,
            'offLabel' => $offLabel,
            'thumbIcon' => $thumbIcon,
            'wrapperProps' => $wrapperProps,
            'value' => $value,
            'aria-label' => $ariaLabel,
        ];
    }
}
