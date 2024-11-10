<?php

namespace MantineBlade\Components;

interface TableEventHandler {
    public function handle(mixed $event): void;
}

class RowSelectionEventHandler implements TableEventHandler {
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
