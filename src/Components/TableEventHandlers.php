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
        ($this->callback)($selectedRows);
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
 * Handles column grouping events
 */
class GroupingEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $grouping): void {
        ($this->callback)($grouping);
    }
}

/**
 * Handles column visibility changes
 */
class ColumnVisibilityEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $visibility): void {
        ($this->callback)($visibility);
    }
}

/**
 * Handles row expansion state changes
 */
class RowExpansionEventHandler implements TableEventHandler {
    public function __construct(private callable $callback) {}

    public function handle(mixed $expandedRows): void {
        ($this->callback)($expandedRows);
    }
}
