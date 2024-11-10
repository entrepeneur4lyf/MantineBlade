<?php

namespace MantineBlade\Traits;

trait WithTableHooks
{
    protected array $beforeMount = [];
    protected array $afterMount = [];
    protected array $beforeUpdate = [];
    protected array $afterUpdate = [];
    protected array $beforeDestroy = [];
    protected array $afterDestroy = [];

    /**
     * Register a hook to be called before the component mounts
     */
    public function beforeMount(callable $callback): self
    {
        $this->beforeMount[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called after the component mounts
     */
    public function afterMount(callable $callback): self
    {
        $this->afterMount[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called before the component updates
     */
    public function beforeUpdate(callable $callback): self
    {
        $this->beforeUpdate[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called after the component updates
     */
    public function afterUpdate(callable $callback): self
    {
        $this->afterUpdate[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called before the component is destroyed
     */
    public function beforeDestroy(callable $callback): self
    {
        $this->beforeDestroy[] = $callback;
        return $this;
    }

    /**
     * Register a hook to be called after the component is destroyed
     */
    public function afterDestroy(callable $callback): self
    {
        $this->afterDestroy[] = $callback;
        return $this;
    }

    /**
     * Execute hooks for a given lifecycle event
     */
    protected function executeHooks(string $type): void
    {
        $hooks = $this->{$type} ?? [];
        foreach ($hooks as $hook) {
            if (is_callable($hook)) {
                $hook($this);
            }
        }
    }
}
