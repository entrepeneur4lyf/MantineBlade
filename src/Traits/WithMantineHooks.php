<?php

namespace MantineBlade\Traits;

trait WithMantineHooks
{
    protected array $onMantineMount = [];
    protected array $onMantineUnmount = [];
    protected array $onMantineUpdate = [];
    protected array $onMantineError = [];
    protected array $onMantineStateChange = [];

    /**
     * Register a hook to be called when the Mantine component mounts
     */
    public function onMantineMount(callable $callback): self
    {
        $this->onMantineMount[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called when the Mantine component unmounts
     */
    public function onMantineUnmount(callable $callback): self
    {
        $this->onMantineUnmount[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called when the Mantine component updates
     */
    public function onMantineUpdate(callable $callback): self
    {
        $this->onMantineUpdate[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called when the Mantine component encounters an error
     */
    public function onMantineError(callable $callback): self
    {
        $this->onMantineError[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called when the Mantine component's state changes
     */
    public function onMantineStateChange(callable $callback): self
    {
        $this->onMantineStateChange[] = $callback;
        return $this;
    }

    /**
     * Execute Mantine hooks for a given lifecycle event
     */
    protected function executeMantineHooks(string $type, mixed ...$args): void
    {
        $hooks = $this->{"onMantine{$type}"} ?? [];
        foreach ($hooks as $hook) {
            if (is_callable($hook)) {
                $hook($this, ...$args);
            }
        }
    }
}
