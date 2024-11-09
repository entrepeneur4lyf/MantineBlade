<?php

namespace MantineBlade\Components;

class ActionIcon extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $variant = null,
        public mixed $color = null,
        public mixed $gradient = null,
        public mixed $size = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
        public ?bool $loading = null,
        public mixed $loaderProps = null,
        public ?bool $autoContrast = null,
        public mixed $component = null,
        public ?string $ariaLabel = null,
        public mixed $onClick = null,
        public mixed $href = null,
        public mixed $target = null,
        public mixed $rel = null,
    ) {
        parent::__construct();

        $this->props = [
            'variant' => $variant,
            'color' => $color,
            'gradient' => $gradient,
            'size' => $size,
            'radius' => $radius,
            'disabled' => $disabled,
            'loading' => $loading,
            'loaderProps' => $loaderProps,
            'autoContrast' => $autoContrast,
            'component' => $component,
            'aria-label' => $ariaLabel,
            'onClick' => $onClick,
            'href' => $href,
            'target' => $target,
            'rel' => $rel,
        ];
    }
}
