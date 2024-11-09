<?php

namespace MantineBlade\Components;

class Group extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $gap = null,
        public ?string $justify = null,
        public ?string $align = null,
        public ?bool $wrap = null,
        public ?bool $grow = null,
        public ?bool $preventGrowOverflow = null,
    ) {
        parent::__construct();

        $this->props = [
            'gap' => $gap,
            'justify' => $justify,
            'align' => $align,
            'wrap' => $wrap,
            'grow' => $grow,
            'preventGrowOverflow' => $preventGrowOverflow,
        ];
    }
}
