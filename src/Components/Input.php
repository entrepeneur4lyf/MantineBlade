<?php

namespace MantineBlade\Components;

class Input extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
        public ?bool $error = null,
        public mixed $component = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public ?string $leftSectionWidth = null,
        public ?string $rightSectionWidth = null,
        public ?string $leftSectionPointerEvents = null,
        public ?string $rightSectionPointerEvents = null,
        public ?bool $pointer = null,
        public mixed $wrapperProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'disabled' => $disabled,
            'error' => $error,
            'component' => $component,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'leftSectionWidth' => $leftSectionWidth,
            'rightSectionWidth' => $rightSectionWidth,
            'leftSectionPointerEvents' => $leftSectionPointerEvents,
            'rightSectionPointerEvents' => $rightSectionPointerEvents,
            'pointer' => $pointer,
            'wrapperProps' => $wrapperProps,
        ];
    }
}
