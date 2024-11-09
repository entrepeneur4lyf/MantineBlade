<?php

namespace MantineBlade\Components;

class Button extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $variant = null,
        public ?string $color = null,
        public ?string $size = null,
        public ?string $radius = null,
        public bool $loading = false,
        public bool $disabled = false,
        public ?string $leftSection = null,
        public ?string $rightSection = null,
    ) {
        parent::__construct();

        $this->props = [
            'variant' => $variant ?? config('mantine.defaults.button.variant', 'filled'),
            'color' => $color ?? config('mantine.theme.primaryColor', 'blue'),
            'size' => $size ?? config('mantine.defaults.button.size', 'sm'),
            'radius' => $radius ?? config('mantine.theme.radius', 'sm'),
            'loading' => $loading,
            'disabled' => $disabled,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
        ];
    }

    /**
     * Get the styles required for this component.
     */
    protected function getStyles(): array
    {
        return [
            '@mantine/core/styles.css',
            '@mantine/core/styles/Button.css',
        ];
    }
}
