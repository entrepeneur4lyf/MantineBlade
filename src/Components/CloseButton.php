<?php

namespace MantineBlade\Components;

class CloseButton extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $variant = null,
        public mixed $size = null,
        public mixed $radius = null,
        public mixed $icon = null,
        public mixed $iconSize = null,
        public ?bool $disabled = null,
        public mixed $onClick = null,
        public ?string $ariaLabel = null,
        public mixed $component = null,
        public mixed $href = null,
        public mixed $target = null,
        public mixed $rel = null,
    ) {
        parent::__construct();

        $this->props = [
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'icon' => $icon,
            'iconSize' => $iconSize,
            'disabled' => $disabled,
            'onClick' => $onClick,
            'aria-label' => $ariaLabel,
            'component' => $component,
            'href' => $href,
            'target' => $target,
            'rel' => $rel,
        ];
    }
}
