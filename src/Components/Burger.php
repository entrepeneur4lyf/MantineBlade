<?php

namespace MantineBlade\Components;

class Burger extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?bool $opened = null,
        public mixed $size = null,
        public mixed $color = null,
        public mixed $lineSize = null,
        public mixed $transitionDuration = null,
        public mixed $onClick = null,
        public mixed $ariaLabel = null,
        public mixed $disabled = null,
    ) {
        parent::__construct();

        $this->props = [
            'opened' => $opened,
            'size' => $size,
            'color' => $color,
            'lineSize' => $lineSize,
            'transitionDuration' => $transitionDuration,
            'onClick' => $onClick,
            'aria-label' => $ariaLabel,
            'disabled' => $disabled,
        ];
    }
}
