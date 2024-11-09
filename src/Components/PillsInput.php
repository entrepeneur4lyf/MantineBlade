<?php

namespace MantineBlade\Components;

class PillsInput extends MantineComponent
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
        public mixed $onClick = null,
        public mixed $onFocus = null,
        public mixed $onBlur = null,
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
            'onClick' => $onClick,
            'onFocus' => $onFocus,
            'onBlur' => $onBlur,
            'placeholder' => $placeholder,
            'aria-label' => $ariaLabel,
            'wrapperProps' => $wrapperProps,
        ];
    }
}
