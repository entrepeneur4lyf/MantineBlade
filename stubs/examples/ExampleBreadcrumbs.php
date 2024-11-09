<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleBreadcrumbs extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <x-mantine-breadcrumbs>
                    <x-mantine-anchor href="https://mantine.dev">
                        Mantine
                    </x-mantine-anchor>

                    <x-mantine-anchor href="#hooks">
                        Mantine hooks
                    </x-mantine-anchor>

                    <x-mantine-anchor href="#use-id">
                        use-id
                    </x-mantine-anchor>
                </x-mantine-breadcrumbs>

                <!-- With custom separator -->
                <div class="mt-4">
                    <x-mantine-breadcrumbs separator="→" separator-margin="md">
                        <x-mantine-anchor href="https://mantine.dev">
                            Mantine
                        </x-mantine-anchor>

                        <x-mantine-anchor href="#hooks">
                            Mantine hooks
                        </x-mantine-anchor>

                        <x-mantine-anchor href="#use-id">
                            use-id
                        </x-mantine-anchor>
                    </x-mantine-breadcrumbs>
                </div>

                <!-- With unstyled option -->
                <div class="mt-4">
                    <x-mantine-breadcrumbs :unstyled="true">
                        <x-mantine-anchor href="https://mantine.dev">
                            Mantine
                        </x-mantine-anchor>

                        <x-mantine-anchor href="#hooks">
                            Mantine hooks
                        </x-mantine-anchor>

                        <x-mantine-anchor href="#use-id">
                            use-id
                        </x-mantine-anchor>
                    </x-mantine-breadcrumbs>
                </div>

                <!-- With custom styles -->
                <div class="mt-4">
                    <x-mantine-breadcrumbs
                        class="bg-gray-100 p-2 rounded"
                        separator="•"
                        separator-margin="lg"
                    >
                        <x-mantine-anchor href="https://mantine.dev" class="text-blue-600">
                            Home
                        </x-mantine-anchor>

                        <x-mantine-anchor href="#products" class="text-blue-600">
                            Products
                        </x-mantine-anchor>

                        <span class="text-gray-600">
                            Current Page
                        </span>
                    </x-mantine-breadcrumbs>
                </div>

                <!-- With dynamic items -->
                <div class="mt-4">
                    @php
                        $items = [
                            ['title' => 'Home', 'href' => '/'],
                            ['title' => 'Category', 'href' => '/category'],
                            ['title' => 'Subcategory', 'href' => '/category/subcategory'],
                            ['title' => 'Current Page', 'href' => null],
                        ];
                    @endphp

                    <x-mantine-breadcrumbs>
                        @foreach($items as $item)
                            @if($item['href'])
                                <x-mantine-anchor href="{{ $item['href'] }}">
                                    {{ $item['title'] }}
                                </x-mantine-anchor>
                            @else
                                <span>{{ $item['title'] }}</span>
                            @endif
                        @endforeach
                    </x-mantine-breadcrumbs>
                </div>

                <!-- With icon separators -->
                <div class="mt-4">
                    <x-mantine-breadcrumbs separator="→" separator-margin="md">
                        <x-mantine-anchor href="/">
                            <i class="fas fa-home mr-1"></i>
                            Home
                        </x-mantine-anchor>

                        <x-mantine-anchor href="/dashboard">
                            <i class="fas fa-tachometer-alt mr-1"></i>
                            Dashboard
                        </x-mantine-anchor>

                        <x-mantine-anchor href="/settings">
                            <i class="fas fa-cog mr-1"></i>
                            Settings
                        </x-mantine-anchor>
                    </x-mantine-breadcrumbs>
                </div>
            </div>
        blade;
    }
}
