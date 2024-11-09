<?php

namespace MantineBlade\Components\Combobox;

use MantineBlade\Components\MantineComponent;

class EmptyOption extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}
