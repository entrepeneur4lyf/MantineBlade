<?php

namespace MantineBlade\Traits;

trait WithMantineClickOutside
{
    protected array $clickOutsideHandlers = [];
    protected ?array $clickOutsideEvents = null;
    protected array $clickOutsideNodes = [];

    /**
     * Register a click outside handler
     */
    public function onClickOutside(callable $handler, ?array $events = null, array $nodes = []): self
    {
        $this->clickOutsideHandlers[] = $handler;
        $this->clickOutsideEvents = $events;
        $this->clickOutsideNodes = array_merge($this->clickOutsideNodes, $nodes);
        
        return $this;
    }

    /**
     * Get the click outside configuration for Mingle
     */
    public function getClickOutsideConfig(): array
    {
        return [
            'events' => $this->clickOutsideEvents,
            'nodes' => $this->clickOutsideNodes,
        ];
    }

    /**
     * Initialize click outside hook for Livewire
     */
    public function mountClickOutside(): void
    {
        $this->dispatchBrowserEvent('mantine-init-click-outside', [
            'config' => $this->getClickOutsideConfig()
        ]);
    }

    /**
     * Handle click outside event from Mingle
     */
    public function handleClickOutside(): void
    {
        foreach ($this->clickOutsideHandlers as $handler) {
            if (is_callable($handler)) {
                $handler($this);
            }
        }
    }
}
