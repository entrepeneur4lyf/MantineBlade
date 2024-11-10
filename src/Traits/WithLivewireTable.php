<?php

namespace MantineBlade\Traits;

use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;

trait WithLivewireTable
{
    public function refreshTable(): void
    {
        $this->dispatch('table-refresh');
    }

    #[Computed]
    public function tableData(): array
    {
        return $this->data instanceof Collection ? $this->data->toArray() : $this->data;
    }

    public function updateTableState(array $state): void
    {
        $this->state = $state;
        $this->dispatch('table-state-updated', state: $state);
    }

    public function handleTableEvent(string $event, mixed $payload): void
    {
        $method = 'handle' . ucfirst($event);
        if (method_exists($this, $method)) {
            $this->$method($payload);
        }
    }
}
