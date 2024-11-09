<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleColorInput extends Component
{
    public ?string $color = null;
    public ?string $format = 'hex';
    public array $swatches = [
        '#2e2e2e', '#868e96', '#fa5252', '#e64980', '#be4bdb',
        '#7950f2', '#4c6ef5', '#228be6', '#15aabf', '#12b886',
        '#40c057', '#82c91e', '#fab005', '#fd7e14'
    ];

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic color input -->
                <x-mantine-color-input
                    label="Pick color"
                    placeholder="Pick color"
                    wire:model.live="color"
                />

                <!-- With description and error -->
                <x-mantine-color-input
                    label="With description and error"
                    description="Choose your favorite color"
                    error="This color is not allowed"
                    class="mt-4"
                />

                <!-- Different formats -->
                <x-mantine-color-input
                    label="Color format"
                    :format="$format"
                    class="mt-4"
                />

                <!-- With swatches -->
                <x-mantine-color-input
                    label="With swatches"
                    placeholder="Pick from predefined colors"
                    :swatches="$swatches"
                    :swatches-per-row="7"
                    class="mt-4"
                />

                <!-- Restricted to swatches -->
                <x-mantine-color-input
                    label="Restricted to swatches"
                    placeholder="Only predefined colors"
                    :swatches="$swatches"
                    :disallow-input="true"
                    :with-picker="false"
                    class="mt-4"
                />

                <!-- Without eye dropper -->
                <x-mantine-color-input
                    label="Without eye dropper"
                    placeholder="No eye dropper"
                    :with-eye-dropper="false"
                    class="mt-4"
                />

                <!-- Custom eye dropper icon -->
                <x-mantine-color-input
                    label="Custom eye dropper icon"
                    placeholder="With custom icon"
                    :eye-dropper-icon='<svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10z"/></svg>'
                    class="mt-4"
                />

                <!-- Read only -->
                <x-mantine-color-input
                    label="Read only"
                    :read-only="true"
                    :default-value="'#F0FCFE'"
                    class="mt-4"
                />

                <!-- Disabled -->
                <x-mantine-color-input
                    label="Disabled"
                    :disabled="true"
                    placeholder="Cannot pick color"
                    class="mt-4"
                />
            </div>
        blade;
    }
}
