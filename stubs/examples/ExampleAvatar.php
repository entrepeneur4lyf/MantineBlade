<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleAvatar extends Component
{
    public $names = [
        'John Doe',
        'Jane Mol',
        'Alex Lump',
        'Sarah Condor',
        'Mike Johnson',
        'Kate Kok',
        'Tom Smith',
    ];

    public $charactersList = [
        [
            'name' => 'Salazar Troop',
            'image' => 'https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/avatars/avatar-7.png',
        ],
        [
            'name' => 'Bandit Crimes',
            'image' => 'https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/avatars/avatar-8.png',
        ],
        [
            'name' => 'Jane Rata',
            'image' => 'https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/avatars/avatar-9.png',
        ],
    ];

    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic usage -->
                <div>
                    <x-mantine-group>
                        <!-- With image -->
                        <x-mantine-avatar
                            src="https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/avatars/avatar-7.png"
                            alt="it's me"
                        />

                        <!-- Default placeholder -->
                        <x-mantine-avatar radius="xl" />

                        <!-- Letters with xl radius -->
                        <x-mantine-avatar color="cyan" radius="xl">
                            MK
                        </x-mantine-avatar>

                        <!-- Custom placeholder icon -->
                        <x-mantine-avatar color="blue" radius="sm">
                            <i class="fas fa-star" style="font-size: 1.5rem;"></i>
                        </x-mantine-avatar>
                    </x-mantine-group>
                </div>

                <!-- With initials -->
                <div class="mt-8">
                    <x-mantine-group>
                        @foreach($names as $name)
                            <x-mantine-avatar
                                :name="$name"
                                color="initials"
                            />
                        @endforeach
                    </x-mantine-group>
                </div>

                <!-- With restricted colors -->
                <div class="mt-8">
                    <x-mantine-group>
                        @foreach($names as $name)
                            <x-mantine-avatar
                                :name="$name"
                                color="initials"
                                :allowed-initials-colors="['blue', 'red']"
                            />
                        @endforeach
                    </x-mantine-group>
                </div>

                <!-- Different variants -->
                <div class="mt-8">
                    <x-mantine-group>
                        <x-mantine-avatar
                            variant="filled"
                            radius="sm"
                            color="blue"
                        >
                            MK
                        </x-mantine-avatar>

                        <x-mantine-avatar
                            variant="light"
                            radius="sm"
                            color="blue"
                        >
                            MK
                        </x-mantine-avatar>

                        <x-mantine-avatar
                            variant="outline"
                            radius="sm"
                            color="blue"
                        >
                            MK
                        </x-mantine-avatar>

                        <x-mantine-avatar
                            variant="transparent"
                            radius="sm"
                            color="blue"
                        >
                            MK
                        </x-mantine-avatar>
                    </x-mantine-group>
                </div>

                <!-- Avatar group -->
                <div class="mt-8">
                    <x-mantine-avatar-group>
                        @foreach($charactersList as $character)
                            <x-mantine-avatar
                                :src="$character['image']"
                                :alt="$character['name']"
                            />
                        @endforeach
                        <x-mantine-avatar>+2</x-mantine-avatar>
                    </x-mantine-avatar-group>
                </div>

                <!-- With tooltips -->
                <div class="mt-8">
                    <x-mantine-tooltip-group :open-delay="300" :close-delay="100">
                        <x-mantine-avatar-group spacing="sm">
                            @foreach($charactersList as $character)
                                <x-mantine-tooltip
                                    :label="$character['name']"
                                    :with-arrow="true"
                                >
                                    <x-mantine-avatar
                                        :src="$character['image']"
                                        :alt="$character['name']"
                                        radius="xl"
                                    />
                                </x-mantine-tooltip>
                            @endforeach
                            <x-mantine-tooltip
                                :with-arrow="true"
                                label='<div>John Outcast</div><div>Levi Capitan</div>'
                            >
                                <x-mantine-avatar radius="xl">
                                    +2
                                </x-mantine-avatar>
                            </x-mantine-tooltip>
                        </x-mantine-avatar-group>
                    </x-mantine-tooltip-group>
                </div>

                <!-- As a link -->
                <div class="mt-8">
                    <x-mantine-avatar
                        component="a"
                        href="https://github.com/rtivital"
                        target="_blank"
                        src="https://raw.githubusercontent.com/mantinedev/mantine/master/.demo/avatars/avatar-7.png"
                        alt="it's me"
                    />
                </div>
            </div>
        blade;
    }
}
