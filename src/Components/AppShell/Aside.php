<?php

namespace MantineBlade\Components\AppShell;

use MantineBlade\Components\MantineComponent;

class Aside extends MantineComponent
{
    public function __construct(
        public ?bool $withBorder = null,
        public ?int $zIndex = null,
        public ?int $width = null,
        public ?string $breakpoint = null,
    ) {
        parent::__construct();

        $this->props = [
            'withBorder' => $withBorder ?? config('mantine.defaults.appshell.aside.withBorder', true),
            'zIndex' => $zIndex ?? config('mantine.defaults.appshell.aside.zIndex', 200),
            'width' => $width ?? config('mantine.defaults.appshell.aside.width', 300),
            'breakpoint' => $breakpoint ?? config('mantine.defaults.appshell.aside.breakpoint', 'sm'),
        ];
    }
}
