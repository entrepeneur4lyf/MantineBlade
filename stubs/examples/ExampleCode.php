<?php

namespace App\View\Components;

use Livewire\Component;

class ExampleCode extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <!-- Basic inline usage -->
                <div>
                    <x-mantine-code>React.createElement()</x-mantine-code>
                </div>

                <!-- Block code -->
                <div class="mt-8">
                    <x-mantine-code :block="true">
                        import { Code } from '@mantine/core';

                        function Demo() {
                            return <Code>React.createElement()</Code>;
                        }
                    </x-mantine-code>
                </div>

                <!-- With custom colors -->
                <div class="mt-8">
                    <x-mantine-group justify="center">
                        <x-mantine-code color="blue.9" c="white">
                            React.createElement()
                        </x-mantine-code>

                        <x-mantine-code color="var(--mantine-color-blue-light)">
                            React.createElement()
                        </x-mantine-code>
                    </x-mantine-group>
                </div>

                <!-- Block code with syntax -->
                <div class="mt-8">
                    <x-mantine-code :block="true" color="blue.1">
                        // JavaScript example
                        const greeting = 'Hello, World!';
                        console.log(greeting);

                        // Function definition
                        function add(a, b) {
                            return a + b;
                        }

                        // Object example
                        const user = {
                            name: 'John Doe',
                            age: 30,
                            isAdmin: true
                        };

                        // Array methods
                        const numbers = [1, 2, 3, 4, 5];
                        const doubled = numbers.map(n => n * 2);
                    </x-mantine-code>
                </div>

                <!-- Multiple inline examples -->
                <div class="mt-8">
                    <x-mantine-text>
                        Here are some common React hooks: 
                        <x-mantine-code color="grape.6">useState</x-mantine-code>,
                        <x-mantine-code color="indigo.6">useEffect</x-mantine-code>,
                        <x-mantine-code color="cyan.6">useContext</x-mantine-code>, and
                        <x-mantine-code color="pink.6">useReducer</x-mantine-code>.
                    </x-mantine-text>
                </div>

                <!-- With different background colors -->
                <div class="mt-8">
                    <x-mantine-stack>
                        <x-mantine-code :block="true" color="dark.4">
                            // Dark theme code
                            const darkMode = true;
                        </x-mantine-code>

                        <x-mantine-code :block="true" color="gray.1">
                            // Light theme code
                            const lightMode = true;
                        </x-mantine-code>

                        <x-mantine-code :block="true" color="blue.1">
                            // Blue theme code
                            const blueMode = true;
                        </x-mantine-code>
                    </x-mantine-stack>
                </div>
            </div>
        blade;
    }
}
