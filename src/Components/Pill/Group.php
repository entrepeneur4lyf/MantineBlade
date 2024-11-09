<?php

namespace MantineBlade\Components\Pill;

use MantineBlade\Components\MantineComponent;

class Group extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}
