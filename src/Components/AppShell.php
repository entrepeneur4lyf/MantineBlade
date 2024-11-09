<?php

namespace MantineBlade\Components;

class AppShell extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?array $header = null,
        public ?array $navbar = null,
        public ?array $aside = null,
        public ?array $footer = null,
        public string|array|null $padding = null,
        public ?string $layout = null,
        public ?bool $withBorder = null,
        public ?int $zIndex = null,
        public ?int $transitionDuration = null,
        public ?string $transitionTimingFunction = null,
        public bool $disabled = false,
    ) {
        parent::__construct();

        $this->props = [
            'header' => $header,
            'navbar' => $navbar,
            'aside' => $aside,
            'footer' => $footer,
            'padding' => $padding ?? config('mantine.defaults.appshell.padding', 'md'),
            'layout' => $layout ?? config('mantine.defaults.appshell.layout', 'default'),
            'withBorder' => $withBorder ?? config('mantine.defaults.appshell.withBorder', true),
            'zIndex' => $zIndex ?? config('mantine.defaults.appshell.zIndex', 200),
            'transitionDuration' => $transitionDuration ?? config('mantine.defaults.appshell.transitionDuration', 200),
            'transitionTimingFunction' => $transitionTimingFunction ?? config('mantine.defaults.appshell.transitionTimingFunction', 'ease'),
            'disabled' => $disabled,
        ];
    }
}
