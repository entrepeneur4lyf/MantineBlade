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
        // Map event types to handler methods
        $handlerMap = [
            'rowSelection' => $this->onRowSelectionChange,
            'columnFilters' => $this->onColumnFiltersChange,
            'globalFilter' => $this->onGlobalFilterChange,
            'pagination' => $this->onPaginationChange,
            'sorting' => $this->onSortingChange,
            'grouping' => $this->onGroupingChange,
            'columnVisibility' => $this->onColumnVisibilityChange,
            'rowExpansion' => $this->onRowExpansionChange
        ];

        // Handle via registered event handler if exists
        if (isset($handlerMap[$event]) && $handlerMap[$event] instanceof TableEventHandler) {
            $handlerMap[$event]->handle($payload['data']);
            return;
        }

        // Fall back to method convention
        $method = 'handle' . ucfirst($event);
        if (method_exists($this, $method)) {
            $this->$method($payload['data']);
        }
        
        // Emit state update event for Mingle
        $this->dispatch('table-state-updated', [
            'event' => $event,
            'data' => $payload['data']
        ]);
    }

    /**
     * Binds a Mingle event listener to the table component
     */
    public function mountWithLivewireTable(): void
    {
        $this->js('table-event', function($event) {
            $this->handleTableEvent($event['type'], $event);
        });
    }
}
