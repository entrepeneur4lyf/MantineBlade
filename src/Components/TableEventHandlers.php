<?php

namespace MantineBlade\Components;

/**
 * Base interface for all table event handlers
 * 
 * Provides a consistent way to handle various table events like
 * row selection, filtering, sorting etc.
 */
interface TableEventHandler {
    public function handle(mixed $event): void;
}

/**
 * Handles row selection events in the table
 * 
 * @implements TableEventHandler
 */
class RowSelectionEventHandler implements TableEventHandler {
    /**
     * @param callable $callback Function to execute when rows are selected
     */
    public function __construct(private callable $callback) {}

    public function handle(mixed $selectedRows): void {
        if ($this->callback instanceof \Closure) {
            ($this->callback)($selectedRows);
        } elseif (is_string($this->callback)) {
            if (str_contains($this->callback, '.')) {
                // Handle method calls through Mingle
                [$component, $method] = explode('.', $this->callback);
                if (method_exists($component, $method)) {
                    $this->dispatch($method, ['rows' => $selectedRows]);
                }
            } else {
                // Handle direct event dispatch
                $this->dispatch($this->callback, ['rows' => $selectedRows]);
            }
        }
    }
}

class ColumnFiltersEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $columnFilters): void {
        ($this->callback)($columnFilters);
    }
}

class GlobalFilterEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $filter): void {
        ($this->callback)($filter);
    }
}

class PaginationEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $pagination): void {
        ($this->callback)($pagination);
    }
}

class SortingEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $sorting): void {
        ($this->callback)($sorting);
    }
}

/**
 * Handles column grouping events in the table
 * 
 * Manages the grouping state changes when users group data by columns.
 * The handler receives grouping information including:
 * - Column IDs being grouped
 * - Grouping direction/order
 * - Aggregation functions applied to groups
 * 
 * @implements TableEventHandler
 */
class GroupingEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $grouping): void {
        ($this->callback)($grouping);
    }
}

/**
 * Handles column visibility state changes
 * 
 * Manages visibility toggles for table columns, receiving:
 * - Column IDs and their visibility states
 * - Show/hide events from column selector
 * - Visibility preset applications
 * 
 * @implements TableEventHandler
 */
class ColumnVisibilityEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $visibility): void {
        ($this->callback)($visibility);
    }
}

/**
 * Handles row expansion state changes in the table
 * 
 * Manages expandable rows functionality, receiving:
 * - Row IDs being expanded/collapsed
 * - Expansion depth for nested structures
 * - Detail panel render triggers
 * - Expand/collapse all events
 * 
 * @implements TableEventHandler
 */
class RowExpansionEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $expandedRows): void {
        ($this->callback)($expandedRows);
    }
}
