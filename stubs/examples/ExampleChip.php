<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleChip extends Component
{
    public ?string $singleValue = null;
    public array $multipleValues = [];

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic chip -->
                <x-mantine-chip :default-checked="true">
                    Awesome chip
                </x-mantine-chip>

                <!-- Different variants -->
                <div class="mt-4">
                    <x-mantine-stack>
                        <x-mantine-chip variant="outline">Outline default</x-mantine-chip>
                        <x-mantine-chip variant="outline" checked>Outline checked</x-mantine-chip>
                        <x-mantine-chip variant="outline" checked disabled>Outline checked disabled</x-mantine-chip>
                        
                        <x-mantine-chip variant="light">Light default</x-mantine-chip>
                        <x-mantine-chip variant="light" checked>Light checked</x-mantine-chip>
                        <x-mantine-chip variant="light" checked disabled>Light checked disabled</x-mantine-chip>
                        
                        <x-mantine-chip variant="filled">Filled default</x-mantine-chip>
                        <x-mantine-chip variant="filled" checked>Filled checked</x-mantine-chip>
                        <x-mantine-chip variant="filled" checked disabled>Filled checked disabled</x-mantine-chip>
                    </x-mantine-stack>
                </div>

                <!-- Single selection group -->
                <div class="mt-4">
                    <x-mantine-chip-group wire:model.live="singleValue">
                        <x-mantine-group justify="center">
                            <x-mantine-chip value="1">Single chip</x-mantine-chip>
                            <x-mantine-chip value="2">Can be selected</x-mantine-chip>
                            <x-mantine-chip value="3">At a time</x-mantine-chip>
                        </x-mantine-group>
                    </x-mantine-chip-group>
                </div>

                <!-- Multiple selection group -->
                <div class="mt-4">
                    <x-mantine-chip-group :multiple="true" wire:model.live="multipleValues">
                        <x-mantine-group justify="center">
                            <x-mantine-chip value="1">Multiple chips</x-mantine-chip>
                            <x-mantine-chip value="2">Can be selected</x-mantine-chip>
                            <x-mantine-chip value="3">At a time</x-mantine-chip>
                        </x-mantine-group>
                    </x-mantine-chip-group>
                </div>

                <!-- Custom icon -->
                <div class="mt-4">
                    <x-mantine-chip
                        icon='<svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>'
                        color="red"
                        variant="filled"
                        :default-checked="true"
                    >
                        Forbidden
                    </x-mantine-chip>
                </div>
            </div>
        blade;
    }
}
