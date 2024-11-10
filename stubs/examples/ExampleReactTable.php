<?php

namespace MantineBlade\Examples;

use Livewire\Component;
use MantineBlade\Components\ReactTable;

class ExampleReactTable extends Component
{
    public function render()
    {
        return <<<'BLADE'
            <div>
                <x-mantine-react-table
                    :data="[
                        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Admin'],
                        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'User'],
                        ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com', 'role' => 'Editor']
                    ]"
                    :columns="[
                        ['accessorKey' => 'id', 'header' => 'ID'],
                        ['accessorKey' => 'name', 'header' => 'Name'],
                        ['accessorKey' => 'email', 'header' => 'Email'],
                        ['accessorKey' => 'role', 'header' => 'Role']
                    ]"
                    :enable-column-filtering="true"
                    :enable-sorting="true"
                    :enable-pagination="true"
                    :enable-row-selection="true"
                    :state="[
                        'pagination' => ['pageIndex' => 0, 'pageSize' => 5],
                        'sorting' => [['id' => 'name', 'desc' => false]]
                    ]"
                />
            </div>
        BLADE;
    }
}
