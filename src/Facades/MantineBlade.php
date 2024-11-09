<?php

namespace MantineBlade\Facades;

use Illuminate\Support\Facades\Facade;

class MantineBlade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mantine-blade';
    }
}