<?php

namespace MantineBlade\Traits;

trait WithMantineClickOutside
{
    use WithMantineHooks;

    /**
     * Register a click outside handler
     */
    public function onClickOutside(callable $handler, ?array $events = null, array $nodes = []): self
    {
        return $this->useHook('clickOutside', [
            'events' => $events,
            'nodes' => $nodes
        ], $handler);
    }

    /**
     * Handle click outside event
     */
    public function handleClickOutside(): void
    {
        if (isset($this->handleClickOutside) && is_callable($this->handleClickOutside)) {
            ($this->handleClickOutside)($this);
        }
    }
}
