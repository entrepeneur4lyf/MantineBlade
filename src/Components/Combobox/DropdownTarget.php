<?php

namespace MantineBlade\Components\Combobox;

use MantineBlade\Components\MantineComponent;

class DropdownTarget extends MantineComponent
{
    public function __construct(
        public mixed $refProp = null,
    ) {
        parent::__construct();

        $this->props = [
            'refProp' => $refProp,
        ];
    }
}
