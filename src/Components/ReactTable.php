<?php

namespace MantineBlade\Components;

use InvalidArgumentException;

/**
 * Advanced data table component with rich features and interactivity.
 *
 * The ReactTable component provides a powerful data grid implementation with features
 * like sorting, filtering, pagination, and row selection. Built on top of TanStack Table V8
 * and integrated with Mantine's design system.
 *
 * @see https://v2.mantine-react-table.com/
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
    /**
     * Default table feature configuration
     * 
     * @var array<string, bool|string>
     */
    protected array $tableFeatures = [
        'enableColumnFiltering' => false,
        'enableColumnFilterModes' => false,
        'enableColumnOrdering' => false,
        'enableColumnPinning' => false,
        'enableColumnResizing' => false,
        'enableRowSelection' => false,
        'enableMultiRowSelection' => false,
        'enablePagination' => true,
        'paginateExpandedRows' => true,
        'enableSorting' => true,
        'enableMultiSort' => false,
        'selectDisplayMode' => 'checkbox',
        'selectAllMode' => 'page',
        'layoutMode' => 'semantic'
    ];

    /**
     * Allowed configuration keys with their type constraints
     * 
     * @var array<string, string|array<string>>
     */
    private const ALLOWED_FEATURES = [
        'enableColumnFiltering' => 'bool',
        'enableColumnFilterModes' => 'bool',
        'enableColumnOrdering' => 'bool',
        'enableColumnPinning' => 'bool',
        'enableColumnResizing' => 'bool',
        'enableRowSelection' => 'bool',
        'enableMultiRowSelection' => 'bool',
        'enablePagination' => 'bool',
        'paginateExpandedRows' => 'bool',
        'enableSorting' => 'bool',
        'enableMultiSort' => 'bool',
        'selectDisplayMode' => ['checkbox', 'radio', 'switch'],
        'selectAllMode' => ['page', 'all'],
        'layoutMode' => ['semantic', 'grid']
    ];

    public function __construct(
        public array|null $data = null,
        public array|null $columns = null,
        public array|null $state = null,
        ?array $features = null,
        public mixed $onRowSelectionChange = null,
    ) {
        parent::__construct();

        if ($features !== null) {
            $this->configureFeatures($features);
        }

        $this->props = array_merge(
            $this->tableFeatures,
            [
                'data' => $data,
                'columns' => $columns,
                'state' => $state,
                'onRowSelectionChange' => $onRowSelectionChange,
            ]
        );
    }

    /**
     * Configure table features with validation
     * 
     * @param array<string, bool|string> $features
     * @return $this
     * @throws InvalidArgumentException
     */
    public function configureFeatures(array $features): self
    {
        foreach ($features as $key => $value) {
            if (!array_key_exists($key, self::ALLOWED_FEATURES)) {
                throw new InvalidArgumentException(
                    "Invalid table feature configuration key: {$key}"
                );
            }

            $expectedType = self::ALLOWED_FEATURES[$key];
            
            if (is_array($expectedType)) {
                if (!in_array($value, $expectedType, true)) {
                    throw new InvalidArgumentException(
                        "Invalid value for {$key}. Allowed values: " . 
                        implode(', ', $expectedType)
                    );
                }
            } elseif ($expectedType === 'bool' && !is_bool($value)) {
                throw new InvalidArgumentException(
                    "Table feature {$key} must be a boolean"
                );
            }

            $this->tableFeatures[$key] = $value;
        }

        return $this;
    }

    /**
     * Get current table feature configuration
     * 
     * @return array<string, bool|string>
     */
    public function getFeatures(): array
    {
        return $this->tableFeatures;
    }

    /**
     * Reset table features to default configuration
     * 
     * @return $this
     */
    public function resetFeatures(): self
    {
        $this->tableFeatures = [
            'enableColumnFiltering' => false,
            'enableColumnFilterModes' => false,
            'enableColumnOrdering' => false,
            'enableColumnPinning' => false,
            'enableColumnResizing' => false,
            'enableRowSelection' => false,
            'enableMultiRowSelection' => false,
            'enablePagination' => true,
            'paginateExpandedRows' => true,
            'enableSorting' => true,
            'enableMultiSort' => false,
            'selectDisplayMode' => 'checkbox',
            'selectAllMode' => 'page',
            'layoutMode' => 'semantic'
        ];

        return $this;
    }
}
