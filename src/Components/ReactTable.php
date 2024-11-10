<?php

namespace MantineBlade\Components;

use InvalidArgumentException;
use Illuminate\Support\Collection;

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
class ReactTable extends \MantineBlade\Components\MantineComponent
{
    /**
     * Default table feature configuration
     * 
     * @var array<string, bool|string>
     */
    protected array $tableFeatures = [
        // Existing features
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
        'enableGlobalFilter' => true,
        'enableGlobalFilterModes' => true,
        'enableColumnActions' => true,
        'enableDensityToggle' => true,
        'enableFullScreenToggle' => true,
        'enableHiding' => true,
        'enableClickToCopy' => false,
        
        // New features
        'enableGrouping' => false,
        'enableExpandAll' => false,
        'enableRowNumbers' => false,
        'enableRowActions' => false,
        'enableColumnGrouping' => false,
        'enableAggregationFunctions' => false,
        'enableRowDetail' => false,
        'enableToolbarCustomActions' => false,
        'enableDataExport' => false,
        'enableColumnVirtualization' => false,
        'manualGrouping' => false,
        
        // Display modes
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
        'enableGlobalFilter' => true,
        'enableGlobalFilterModes' => true,
        'enableColumnActions' => true,
        'enableDensityToggle' => true,
        'enableFullScreenToggle' => true,
        'enableHiding' => true,
        'enableClickToCopy' => false,
        'selectDisplayMode' => 'checkbox',
        'selectAllMode' => 'page',
        'layoutMode' => 'semantic',
        'paginationDisplayMode' => 'default',
        'columnFilterDisplayMode' => 'subheader',
        'editDisplayMode' => 'modal',
        'createDisplayMode' => 'modal'
    ];

    /**
     * Allowed configuration keys with their type constraints
     * 
     * @var array<string, string|array<string>>
     */
    private array $state = [];
    private ?array $lazyLoadingConfig = null;
    
    private const ALLOWED_FEATURES = [
        // Basic Features
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
        'enableGlobalFilter' => 'bool',
        'enableGlobalFilterModes' => 'bool',
        'enableColumnActions' => 'bool',
        'enableDensityToggle' => 'bool',
        'enableFullScreenToggle' => 'bool',
        'enableHiding' => 'bool',
        'enableClickToCopy' => 'bool',
        
        // Advanced Features
        'enableGrouping' => 'bool',
        'enableExpandAll' => 'bool',
        'enableRowNumbers' => 'bool',
        'enableRowActions' => 'bool',
        'enableColumnGrouping' => 'bool',
        'enableAggregationFunctions' => 'bool',
        'enableRowDetail' => 'bool',
        'enableToolbarCustomActions' => 'bool',
        'enableDataExport' => 'bool',
        'enableColumnVirtualization' => 'bool',
        'manualGrouping' => 'bool',
        
        // Display Modes
        'selectDisplayMode' => ['checkbox', 'radio', 'switch'],
        'selectAllMode' => ['page', 'all'],
        'layoutMode' => ['semantic', 'grid', 'compact'],
        'paginationDisplayMode' => ['default', 'pages', 'custom', 'infinite'],
        'columnFilterDisplayMode' => ['subheader', 'popover', 'custom'],
        'editDisplayMode' => ['modal', 'row', 'cell', 'table', 'custom'],
        'createDisplayMode' => ['modal', 'row', 'custom'],
        'groupDisplayMode' => ['default', 'collapsed', 'expanded'],
        'exportDisplayMode' => ['menu', 'buttons', 'custom']
    ];

    public array|Collection|null $data = null;
    public array|null $columns = null;

    public function mount(
        array|Collection|null $data = null,
        array|null $columns = null,
        ?array $features = null,
        public ?TableEventHandler $onRowSelectionChange = null,
        public ?TableEventHandler $onColumnFiltersChange = null,
        public ?TableEventHandler $onGlobalFilterChange = null,
        public ?TableEventHandler $onPaginationChange = null,
        public ?TableEventHandler $onSortingChange = null,
        public ?TableEventHandler $onGroupingChange = null,
        public ?TableEventHandler $onColumnVisibilityChange = null,
        public ?TableEventHandler $onRowExpansionChange = null,
        public ?array $aggregationFunctions = null,
        public ?array $toolbarCustomActions = null,
        public ?callable $renderDetailPanel = null,
        public ?array $rowActionButtons = null,
        public int $rowVirtualizerOverscan = 5,
        public int $columnVirtualizerOverscan = 2,
        public int $rowVirtualizationThreshold = 100,
        public int $columnVirtualizationThreshold = 20,
        public ?int $pageCount = null,
        public ?int $rowCount = null
    ) {
        $this->data = $data instanceof Collection ? $data->toArray() : $data;
        $this->columns = $columns;

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

    /**
     * Validates the provided table features against allowed configurations
     * 
     * @param array<string,mixed> $features Features to validate
     * @return array<string,mixed> Validated features
     * @throws \InvalidArgumentException If any feature is invalid
     */
    private function validateFeatures(array $features): array 
    {
        $validatedFeatures = [];
        foreach ($features as $feature => $value) {
            if (!isset(self::ALLOWED_FEATURES[$feature])) {
                throw new \InvalidArgumentException("Invalid feature: $feature");
            }

            $expectedType = self::ALLOWED_FEATURES[$feature];
            
            if (is_array($expectedType)) {
                if (!in_array($value, $expectedType)) {
                    throw new \InvalidArgumentException(
                        "Invalid value for $feature. Allowed values: " . 
                        implode(', ', $expectedType)
                    );
                }
            } elseif ($expectedType === 'bool' && !is_bool($value)) {
                throw new \InvalidArgumentException("$feature must be a boolean");
            }

            $validatedFeatures[$feature] = $value;
        }
        return $validatedFeatures;
    }

    private function mergeFeatures(?array $customFeatures = null): array
    {
        $mergedFeatures = $this->tableFeatures;
        
        if ($customFeatures !== null) {
            $validatedFeatures = $this->validateFeatures($customFeatures);
            $mergedFeatures = array_merge($mergedFeatures, $validatedFeatures);
        }

        return $mergedFeatures;
    }

    public function resetState(?array $newState = null): self
    {
        $this->state = $newState ?? [
            'pagination' => [
                'pageSize' => $this->tableFeatures['defaultPageSize'] ?? 10,
                'pageIndex' => 0
            ],
            'sorting' => [],
            'columnFilters' => [],
            'globalFilter' => null
        ];
        return $this;
    }

    public function updateState(array $stateUpdates): self
    {
        $this->state = array_merge($this->state ?? [], $stateUpdates);
        return $this;
    }

    /**
     * Enables lazy loading functionality for the table
     * 
     * Configures the table to fetch data on-demand using the provided callback.
     * Useful for handling large datasets efficiently.
     * 
     * @param callable $dataFetcher Callback function to fetch data chunks
     * @param int $pageSize Number of records to fetch per page
     * @param bool $enableInfiniteScroll Whether to enable infinite scroll loading
     * @return self
     */
    public function enableLazyLoading(
        callable $dataFetcher, 
        int $pageSize = 50, 
        bool $enableInfiniteScroll = false
    ): self {
        $this->lazyLoadingConfig = [
            'fetcher' => $dataFetcher,
            'pageSize' => $pageSize,
            'infiniteScroll' => $enableInfiniteScroll
        ];
        return $this;
    }

    /**
     * Configures table virtualization settings
     * 
     * Virtualization improves performance by only rendering visible rows/columns.
     * Adjust thresholds and overscan values to optimize rendering performance.
     * 
     * @param int $rowOverscan Number of rows to render beyond visible area
     * @param int $columnOverscan Number of columns to render beyond visible area
     * @param int $rowThreshold Minimum rows before enabling virtualization
     * @param int $columnThreshold Minimum columns before enabling virtualization
     * @return self
     */
    public function configureVirtualization(
        int $rowOverscan = 5, 
        int $columnOverscan = 2,
        int $rowThreshold = 100,
        int $columnThreshold = 20
    ): self {
        $this->rowVirtualizerOverscan = $rowOverscan;
        $this->columnVirtualizerOverscan = $columnOverscan;
        $this->rowVirtualizationThreshold = $rowThreshold;
        $this->columnVirtualizationThreshold = $columnThreshold;
        return $this;
    }

    public function getFeature(string $featureName): mixed
    {
        return $this->tableFeatures[$featureName] ?? null;
    }

    /**
     * Configure aggregation functions for grouped columns
     *
     * @param array<string,callable> $functions Map of column keys to aggregation functions
     * @return self
     */
    /**
     * Configure aggregation functions for grouped columns
     *
     * @param array<string,callable> $functions Map of column keys to aggregation functions
     * @return self
     * @throws InvalidArgumentException If invalid aggregation function provided
     */
    public function setAggregationFunctions(array $functions): self
    {
        foreach ($functions as $column => $function) {
            if (!is_callable($function)) {
                throw new InvalidArgumentException(
                    "Aggregation function for column '$column' must be callable"
                );
            }
        }
        
        $this->tableFeatures['enableAggregationFunctions'] = true;
        $this->aggregationFunctions = $functions;
        return $this;
    }

    /**
     * Add custom actions to the toolbar
     *
     * @param array<string,array{label:string,icon?:string,action:callable}> $actions
     * @return self
     */
    public function addToolbarActions(array $actions): self
    {
        $this->toolbarCustomActions = $actions;
        return $this;
    }

    /**
     * Configure row action buttons
     *
     * @param array<array{label:string,icon?:string,action:callable}> $buttons
     * @return self
     */
    public function setRowActionButtons(array $buttons): self
    {
        $this->rowActionButtons = $buttons;
        return $this;
    }

    /**
     * Set the detail panel renderer for expandable rows
     *
     * @param callable $renderer Function that returns the detail panel content
     * @return self
     */
    public function setDetailPanelRenderer(callable $renderer): self
    {
        $this->renderDetailPanel = $renderer;
        return $this;
    }

    /**
     * Enable data export with specified formats
     *
     * @param array<string> $formats Export formats (csv, xlsx, pdf)
     * @return self
     */
    public function enableDataExport(array $formats = ['csv', 'xlsx']): self
    {
        $this->tableFeatures['enableDataExport'] = true;
        $this->exportFormats = $formats;
        return $this;
    }

    /**
     * Configure column grouping
     *
     * @param array<string,array{groupName:string,aggregationFn?:callable}> $groupingConfig
     * @return self
     */
    /**
     * Configure column grouping with validation
     *
     * @param array<string,array{groupName:string,aggregationFn?:callable}> $groupingConfig
     * @return self
     * @throws InvalidArgumentException If invalid grouping configuration provided
     */
    public function configureColumnGrouping(array $groupingConfig): self
    {
        foreach ($groupingConfig as $column => $config) {
            if (!isset($config['groupName'])) {
                throw new InvalidArgumentException(
                    "Missing required 'groupName' for column '$column' grouping"
                );
            }
            
            if (isset($config['aggregationFn']) && !is_callable($config['aggregationFn'])) {
                throw new InvalidArgumentException(
                    "Aggregation function for column '$column' must be callable"
                );
            }
        }
        
        $this->tableFeatures['enableColumnGrouping'] = true;
        $this->columnGroupingConfig = $groupingConfig;
        return $this;
    }
}
