<?php

namespace MantineBlade\Components;

/**
 * Mantine React Table Component
 *
 * A feature-rich table and data grid component built on top of TanStack Table V8 and Mantine V7.
 * Provides functionality for sorting, filtering, pagination, selection, and more.
 *
 * @property array $data The data to display in the table
 * @property array $columns Column definitions for the table
 * @property bool $enableColumnFiltering Enable column filtering UI and functionality
 * @property bool $enableColumnOrdering Enable column reordering via drag and drop
 * @property bool $enableColumnPinning Enable column pinning (freezing)
 * @property bool $enableRowSelection Enable row selection with checkboxes
 * @property bool $enablePagination Enable pagination controls
 * @property bool $enableSorting Enable column sorting
 * @property mixed $onRowSelectionChange Callback fired when row selection changes
 * @property string $state Initial state for controlled tables
 */
class ReactTable extends MantineComponent
{
    public function __construct(
        public mixed $data = null,
        public mixed $columns = null,
        public mixed $enableColumnFiltering = null,
        public mixed $enableColumnOrdering = null,
        public mixed $enableColumnPinning = null,
        public mixed $enableRowSelection = null,
        public mixed $enablePagination = null,
        public mixed $enableSorting = null,
        public mixed $onRowSelectionChange = null,
        public mixed $state = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'columns' => $columns,
            'enableColumnFiltering' => $enableColumnFiltering,
            'enableColumnOrdering' => $enableColumnOrdering,
            'enableColumnPinning' => $enableColumnPinning,
            'enableRowSelection' => $enableRowSelection,
            'enablePagination' => $enablePagination,
            'enableSorting' => $enableSorting,
            'onRowSelectionChange' => $onRowSelectionChange,
            'state' => $state,
        ];
    }
}
