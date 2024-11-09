<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleActionIcon extends Component
{
    public $loading = false;

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <x-mantine-action-icon
                    variant="filled"
                    aria-label="Settings"
                >
                    <i class="fas fa-cog" style="width: 70%; height: 70%"></i>
                </x-mantine-action-icon>

                <!-- With gradient -->
                <div class="mt-4">
                    <x-mantine-action-icon
                        variant="gradient"
                        size="xl"
                        aria-label="Gradient action icon"
                        :gradient="['from' => 'blue', 'to' => 'cyan', 'deg' => 90]"
                    >
                        <i class="fas fa-heart"></i>
                    </x-mantine-action-icon>
                </div>

                <!-- Different sizes -->
                <div class="mt-4">
                    <x-mantine-group>
                        <x-mantine-action-icon size="xs" variant="default" aria-label="Extra small">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon size="sm" variant="default" aria-label="Small">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon size="md" variant="default" aria-label="Medium">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon size="lg" variant="default" aria-label="Large">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon size="xl" variant="default" aria-label="Extra large">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>
                    </x-mantine-group>
                </div>

                <!-- Disabled state -->
                <div class="mt-4">
                    <x-mantine-group>
                        <x-mantine-action-icon
                            size="xl"
                            :disabled="true"
                            aria-label="Disabled and not interactive"
                        >
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon
                            size="xl"
                            data-disabled
                            aria-label="Has disabled styles but still interactive"
                        >
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>
                    </x-mantine-group>
                </div>

                <!-- Loading state -->
                <div class="mt-4">
                    <x-mantine-group>
                        <x-mantine-action-icon :loading="$loading">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon variant="light" :loading="$loading">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon variant="outline" :loading="$loading">
                            <i class="fas fa-heart"></i>
                        </x-mantine-action-icon>
                    </x-mantine-group>

                    <x-mantine-switch
                        class="mt-4"
                        :checked="$loading"
                        :on-change="fn() => $this->loading = !$this->loading"
                        label="Loading state"
                    />
                </div>

                <!-- With custom loader -->
                <div class="mt-4">
                    <x-mantine-action-icon
                        size="xl"
                        :loading="true"
                        :loader-props="['type' => 'dots']"
                    />
                </div>

                <!-- ActionIcon.Group -->
                <div class="mt-4">
                    <x-mantine-action-icon-group>
                        <x-mantine-action-icon variant="default" size="lg" aria-label="Gallery">
                            <i class="fas fa-image" style="width: 20px"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon variant="default" size="lg" aria-label="Settings">
                            <i class="fas fa-cog" style="width: 20px"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon variant="default" size="lg" aria-label="Likes">
                            <i class="fas fa-heart" style="width: 20px"></i>
                        </x-mantine-action-icon>
                    </x-mantine-action-icon-group>
                </div>

                <!-- Vertical group -->
                <div class="mt-4">
                    <x-mantine-action-icon-group orientation="vertical">
                        <x-mantine-action-icon variant="default" size="lg" aria-label="Gallery">
                            <i class="fas fa-image" style="width: 20px"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon variant="default" size="lg" aria-label="Settings">
                            <i class="fas fa-cog" style="width: 20px"></i>
                        </x-mantine-action-icon>

                        <x-mantine-action-icon variant="default" size="lg" aria-label="Likes">
                            <i class="fas fa-heart" style="width: 20px"></i>
                        </x-mantine-action-icon>
                    </x-mantine-action-icon-group>
                </div>

                <!-- As link -->
                <div class="mt-4">
                    <x-mantine-action-icon
                        component="a"
                        href="https://mantine.dev"
                        target="_blank"
                        size="xl"
                        aria-label="Open in a new tab"
                    >
                        <i class="fas fa-external-link-alt"></i>
                    </x-mantine-action-icon>
                </div>
            </div>
        blade;
    }
}
