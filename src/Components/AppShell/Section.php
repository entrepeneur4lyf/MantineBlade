<?php

namespace MantineBlade\Components\AppShell;

use MantineBlade\Components\MantineComponent;

class Section extends MantineComponent
{
    public function __construct(
        public ?bool $grow = null,
        public ?string $component = null,
    ) {
        parent::__construct();

        $this->props = [
            'grow' => $grow,
            'component' => $component,
        ];
    }
}
