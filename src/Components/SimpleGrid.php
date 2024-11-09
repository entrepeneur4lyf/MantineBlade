<?php

namespace MantineBlade\Components;

class SimpleGrid extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int|array|null $cols = null,
        public string|array|null $spacing = null,
        public string|array|null $verticalSpacing = null,
        public ?string $type = null,  // 'container' for container queries
    ) {
        parent::__construct();

        $this->props = [
            'cols' => $cols,
            'spacing' => $spacing,
            'verticalSpacing' => $verticalSpacing,
            'type' => $type,
        ];
    }
}
