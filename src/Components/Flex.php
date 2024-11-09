<?php

namespace MantineBlade\Components;

class Flex extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $gap = null,
        public ?string $justify = null,
        public ?string $align = null,
        public ?string $wrap = null,
        public ?string $direction = null,
    ) {
        parent::__construct();

        $this->props = [
            'gap' => $gap,
            'justify' => $justify,
            'align' => $align,
            'wrap' => $wrap,
            'direction' => $direction,
        ];
    }
}
