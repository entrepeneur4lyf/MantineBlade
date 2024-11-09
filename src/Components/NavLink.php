<?php

namespace MantineBlade\Components;

class NavLink extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $label = null,
        public mixed $description = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public mixed $active = null,
        public mixed $variant = null,
        public mixed $color = null,
        public mixed $autoContrast = null,
        public mixed $disabled = null,
        public mixed $childrenOffset = null,
        public mixed $defaultOpened = null,
        public mixed $opened = null,
        public mixed $onChange = null,
        public mixed $onClick = null,
        public mixed $component = null,
        public mixed $href = null,
        public mixed $target = null,
        public mixed $rel = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'active' => $active,
            'variant' => $variant,
            'color' => $color,
            'autoContrast' => $autoContrast,
            'disabled' => $disabled,
            'childrenOffset' => $childrenOffset,
            'defaultOpened' => $defaultOpened,
            'opened' => $opened,
            'onChange' => $onChange,
            'onClick' => $onClick,
            'component' => $component,
            'href' => $href,
            'target' => $target,
            'rel' => $rel,
        ];
    }
}
