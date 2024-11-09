<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleAppShell extends Component
{
    public bool $mobileOpened = false;
    public bool $desktopOpened = true;

    public function toggleMobile()
    {
        $this->mobileOpened = !$this->mobileOpened;
    }

    public function toggleDesktop()
    {
        $this->desktopOpened = !$this->desktopOpened;
    }

    public function render()
    {
        return <<<'blade'
            <x-mantine-app-shell
                :header="['height' => 60]"
                :navbar="[
                    'width' => 300,
                    'breakpoint' => 'sm',
                    'collapsed' => [
                        'mobile' => !$mobileOpened,
                        'desktop' => !$desktopOpened
                    ]
                ]"
                padding="md"
            >
                <x-mantine-app-shell-header>
                    <div class="flex items-center h-full px-4">
                        <x-mantine-button
                            variant="subtle"
                            class="lg:hidden"
                            wire:click="toggleMobile"
                        >
                            ☰
                        </x-mantine-button>
                        <x-mantine-button
                            variant="subtle"
                            class="hidden lg:block"
                            wire:click="toggleDesktop"
                        >
                            ☰
                        </x-mantine-button>
                        <div class="ml-4">Logo</div>
                    </div>
                </x-mantine-app-shell-header>

                <x-mantine-app-shell-navbar>
                    <x-mantine-app-shell-section>
                        Navbar Header
                    </x-mantine-app-shell-section>
                    
                    <x-mantine-app-shell-section grow component="ScrollArea">
                        Navigation items go here
                    </x-mantine-app-shell-section>
                    
                    <x-mantine-app-shell-section>
                        Navbar Footer
                    </x-mantine-app-shell-section>
                </x-mantine-app-shell-navbar>

                <x-mantine-app-shell-main>
                    Main content goes here
                </x-mantine-app-shell-main>
            </x-mantine-app-shell>
        blade;
    }
}
