<?php

namespace MantineBlade\Traits;

trait WithMantineClickOutside
{
    use WithMantineHooks;

    protected array $clickOutsideHandlers = [];
    protected ?array $clickOutsideEvents = null;
    protected array $clickOutsideNodes = [];

    /**
     * Register a click outside handler
     */
    public function onClickOutside(callable $handler, ?array $events = null, array $nodes = []): self
    {
        $this->registerHook('clickOutside', [
            'events' => $events,
            'nodes' => $nodes
        ]);
        
        $this->clickOutsideHandlers[] = $handler;
        
        return $this;
    }

    /**
     * Get the click outside configuration
     */
    protected function getClickOutsideConfig(): array
    {
        return [
            'events' => $this->clickOutsideEvents,
            'nodes' => $this->clickOutsideNodes,
        ];
    }

    /**
     * Handle click outside event
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
