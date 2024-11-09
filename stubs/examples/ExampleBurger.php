<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleBurger extends Component
{
    public $opened = false;

    public function toggle()
    {
        $this->opened = !$this->opened;
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <x-mantine-burger
                    :opened="$opened"
                    :on-click="fn() => $this->toggle()"
                    aria-label="Toggle navigation"
                />

                <!-- Different sizes -->
                <div class="mt-4">
                    <x-mantine-group>
                        <x-mantine-burger
                            size="xs"
                            :opened="$opened"
                            :on-click="fn() => $this->toggle()"
                            aria-label="Toggle navigation"
                        />
                        <x-mantine-burger
                            size="sm"
                            :opened="$opened"
                            :on-click="fn() => $this->toggle()"
                            aria-label="Toggle navigation"
                        />
                        <x-mantine-burger
                            size="md"
                            :opened="$opened"
                            :on-click="fn() => $this->toggle()"
                            aria-label="Toggle navigation"
                        />
                        <x-mantine-burger
                            size="lg"
                            :opened="$opened"
                            :on-click="fn() => $this->toggle()"
                            aria-label="Toggle navigation"
                        />
                        <x-mantine-burger
                            size="xl"
                            :opened="$opened"
                            :on-click="fn() => $this->toggle()"
                            aria-label="Toggle navigation"
                        />
                    </x-mantine-group>
                </div>

                <!-- With custom line size -->
                <div class="mt-4">
                    <x-mantine-burger
                        :line-size="2"
                        size="xl"
                        :opened="$opened"
                        :on-click="fn() => $this->toggle()"
                        aria-label="Toggle navigation"
                    />
                </div>

                <!-- With custom color -->
                <div class="mt-4">
                    <x-mantine-burger
                        color="red"
                        :opened="$opened"
                        :on-click="fn() => $this->toggle()"
                        aria-label="Toggle navigation"
                    />
                </div>

                <!-- With custom transition duration -->
                <div class="mt-4">
                    <x-mantine-burger
                        :transition-duration="500"
                        :opened="$opened"
                        :on-click="fn() => $this->toggle()"
                        aria-label="Toggle navigation"
                    />
                </div>

                <!-- Disabled state -->
                <div class="mt-4">
                    <x-mantine-burger
                        :disabled="true"
                        :opened="$opened"
                        :on-click="fn() => $this->toggle()"
                        aria-label="Toggle navigation"
                    />
                </div>

                <!-- With visually hidden text -->
                <div class="mt-4">
                    <x-mantine-burger :opened="$opened" :on-click="fn() => $this->toggle()">
                        <x-mantine-visually-hidden>
                            Toggle navigation
                        </x-mantine-visually-hidden>
                    </x-mantine-burger>
                </div>

                <!-- Navigation menu example -->
                <div class="mt-4 relative">
                    <x-mantine-burger
                        :opened="$opened"
                        :on-click="fn() => $this->toggle()"
                        aria-label="Toggle navigation"
                    />

                    @if($opened)
                        <div class="absolute top-full left-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2">
                            <x-mantine-anchor href="#" class="block px-4 py-2 hover:bg-gray-100">
                                Home
                            </x-mantine-anchor>
                            <x-mantine-anchor href="#" class="block px-4 py-2 hover:bg-gray-100">
                                About
                            </x-mantine-anchor>
                            <x-mantine-anchor href="#" class="block px-4 py-2 hover:bg-gray-100">
                                Contact
                            </x-mantine-anchor>
                        </div>
                    @endif
                </div>
            </div>
        blade;
    }
}
