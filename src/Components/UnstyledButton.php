<?php

namespace MantineBlade\Components;

class UnstyledButton extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $component = null,
        public mixed $onClick = null,
        public mixed $href = null,
        public mixed $target = null,
        public mixed $rel = null,
        public mixed $type = null,
        public mixed $disabled = null,
        public mixed $tabIndex = null,
        public mixed $role = null,
        public mixed $ariaLabel = null,
    ) {
        parent::__construct();

        $this->props = [
            'component' => $component,
            'onClick' => $onClick,
            'href' => $href,
            'target' => $target,
            'rel' => $rel,
            'type' => $type,
            'disabled' => $disabled,
            'tabIndex' => $tabIndex,
            'role' => $role,
            'aria-label' => $ariaLabel,
        ];
    }
}
