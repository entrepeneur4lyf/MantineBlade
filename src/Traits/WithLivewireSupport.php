<?php

namespace MantineBlade\Traits;

use Livewire\Attributes\Reactive;

/**
 * Optional Livewire support for ReactTable component
 * Only loaded when Livewire is available in the project
 */
trait WithLivewireSupport
{
    public function bootWithLivewireSupport()
    {
        if (!class_exists(\Livewire\Component::class)) {
            return;
        }

        if (method_exists(\Livewire\Component::class, 'dispatch')) {
            $this->initializeLivewireProperties();
        }
    }

    protected function initializeLivewireProperties()
    {
        // Add Reactive attribute to properties when Livewire is available
        if (class_exists(\Livewire\Attributes\Reactive::class)) {
            $this->addReactiveAttribute('data');
            $this->addReactiveAttribute('columns');
        }
    }

    protected function addReactiveAttribute(string $property)
    {
        if (property_exists($this, $property)) {
            $reflection = new \ReflectionProperty($this, $property);
            $reflection->setAttributes([new \Livewire\Attributes\Reactive]);
        }
    }

    public function dispatchTableEvent(string $event, mixed $data = null)
    {
        if (method_exists($this, 'dispatch')) {
            $this->dispatch("table.$event", data: $data);
        }
    }
}
