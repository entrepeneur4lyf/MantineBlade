<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleCheckbox extends Component
{
    public bool $checked = false;
    public array $notifications = [
        'email' => false,
        'sms' => false,
        'push' => false,
    ];

    public function toggleAll()
    {
        $allChecked = collect($this->notifications)->every(fn($value) => $value);
        $this->notifications = array_fill_keys(array_keys($this->notifications), !$allChecked);
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic checkbox -->
                <x-mantine-checkbox
                    label="I agree to sell my privacy"
                    :default-checked="true"
                />

                <!-- With description and error -->
                <x-mantine-checkbox
                    label="With description and error"
                    description="This is the description"
                    error="This is the error message"
                    class="mt-4"
                />

                <!-- Different variants -->
                <div class="mt-4">
                    <x-mantine-stack>
                        <x-mantine-checkbox checked label="Default checkbox" />
                        <x-mantine-checkbox :indeterminate="true" label="Indeterminate checkbox" />
                        <x-mantine-checkbox checked variant="outline" label="Outline checked checkbox" />
                        <x-mantine-checkbox disabled label="Disabled checkbox" />
                        <x-mantine-checkbox disabled checked label="Disabled checked checkbox" />
                    </x-mantine-stack>
                </div>

                <!-- Custom icon color -->
                <x-mantine-checkbox
                    :default-checked="true"
                    color="lime.4"
                    icon-color="dark.8"
                    size="md"
                    label="Bright lime checkbox"
                    class="mt-4"
                />

                <!-- Indeterminate state example -->
                <div class="mt-4">
                    <x-mantine-checkbox
                        :checked="collect($notifications)->every(fn($value) => $value)"
                        :indeterminate="collect($notifications)->some(fn($value) => $value) && !collect($notifications)->every(fn($value) => $value)"
                        label="Receive all notifications"
                        wire:click="toggleAll"
                    />
                    <div class="ml-8 mt-2">
                        <x-mantine-stack>
                            <x-mantine-checkbox
                                wire:model.live="notifications.email"
                                label="Receive email notifications"
                            />
                            <x-mantine-checkbox
                                wire:model.live="notifications.sms"
                                label="Receive SMS notifications"
                            />
                            <x-mantine-checkbox
                                wire:model.live="notifications.push"
                                label="Receive push notifications"
                            />
                        </x-mantine-stack>
                    </div>
                </div>

                <!-- Label with link -->
                <x-mantine-checkbox
                    class="mt-4"
                    label='I accept <a href="https://mantine.dev" target="_blank" class="text-blue-500 hover:underline">terms and conditions</a>'
                />
            </div>
        blade;
    }
}
