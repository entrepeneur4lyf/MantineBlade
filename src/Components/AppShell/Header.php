<?php

namespace MantineBlade\Components\AppShell;

use MantineBlade\Components\MantineComponent;

class Header extends MantineComponent
{
    public function __construct(
        public ?bool $withBorder = null,
        public ?int $zIndex = null,
    ) {
        parent::__construct();

        $this->props = [
            'withBorder' => $withBorder ?? config('mantine.defaults.appshell.header.withBorder', true),
            'zIndex' => $zIndex ?? config('mantine.defaults.appshell.header.zIndex', 200),
        ];
    }
}
