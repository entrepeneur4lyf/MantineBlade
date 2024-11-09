<?php

namespace MantineBlade\Components;

class Center extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?bool $inline = null,
    ) {
        parent::__construct();

        $this->props = [
            'inline' => $inline,
        ];
    }
}
