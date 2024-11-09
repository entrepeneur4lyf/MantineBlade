<?php

namespace MantineBlade\Components;

class Textarea extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $description = null,
        public mixed $error = null,
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $withAsterisk = null,
        public ?bool $autosize = null,
        public ?int $minRows = null,
        public ?int $maxRows = null,
        public ?string $resize = null,
        public ?bool $disabled = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?string $placeholder = null,
        public ?string $ariaLabel = null,
        public mixed $wrapperProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'withAsterisk' => $withAsterisk,
            'autosize' => $autosize,
            'minRows' => $minRows,
            'maxRows' => $maxRows,
            'resize' => $resize,
            'disabled' => $disabled,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'placeholder' => $placeholder,
            'aria-label' => $ariaLabel,
            'wrapperProps' => $wrapperProps,
        ];
    }
}
