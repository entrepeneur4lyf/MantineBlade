<?php

namespace MantineBlade\Components;

/**
 * Advanced data table component with rich features and interactivity.
 *
 * The ReactTable component provides a powerful data grid implementation with features
 * like sorting, filtering, pagination, and row selection. Built on top of TanStack Table V8
 * and integrated with Mantine's design system.
 *
 * @see https://tanstack.com/table/v8/docs/guide/introduction
 *
 * @example Basic usage with simple data
 * ```blade
 * <x-mantine-react-table
 *     :data="[
 *         ['name' => 'John', 'age' => 25],
 *         ['name' => 'Jane', 'age' => 30],
 *     ]"
 *     :columns="[
 *         ['accessorKey' => 'name', 'header' => 'Name'],
 *         ['accessorKey' => 'age', 'header' => 'Age'],
 *     ]"
 * />
 * ```
 *
 * @example Advanced table with features enabled
 * ```blade
 * <x-mantine-react-table
 *     :data="$users"
 *     :columns="$columns"
 *     :enable-column-filtering="true"
 *     :enable-sorting="true"
 *     :enable-pagination="true"
 *     :enable-row-selection="true"
 *     :on-row-selection-change="$handleSelectionChange"
 * />
 * ```
 *
 * @example Controlled state with custom configuration
 * ```blade
 * <x-mantine-react-table
 *     :data="$data"
 *     :columns="$columns"
 *     :state="[
 *         'sorting' => [['id' => 'name', 'desc' => false]],
 *         'pagination' => ['pageIndex' => 0, 'pageSize' => 10],
 *     ]"
 *     :enable-column-ordering="true"
 *     :enable-column-pinning="true"
 * />
 * ```
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
