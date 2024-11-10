<?php

namespace MantineBlade\Components;

use Ijpatricio\Mingle\Concerns\InteractsWithMingles;
use Ijpatricio\Mingle\Contracts\HasMingles;
use Livewire\Component;

/**
 * Base Mantine Component
 * 
 * Abstract base class for all Mantine components. Provides core functionality for
 * React component integration and prop handling. This class handles the bridge between
 * Laravel Blade components and their React implementations.
 *
 * Features:
 * - Automatic component name resolution
 * - React component path mapping
 * - Props management and data passing
 * - Integration with Mingle for React/Laravel bridge
 *
 * @property string $componentName The component's class name
 * @property array $props The component's props to be passed to React
 *
 * @example Basic Component Implementation
 * ```php
 * class MyComponent extends MantineComponent
 * {
 *     public function __construct(
 *         public mixed $someProp = null,
 *     ) {
 *         parent::__construct();
 *         
 *         $this->props = [
 *             'someProp' => $someProp,
 *         ];
 *     }
 * }
 * ```
 */
abstract class MantineComponent extends Component implements HasMingles
{
    use InteractsWithMingles;

    /**
     * The component's class name.
     *
     * @var string
     */
    protected string $componentName;

    /**
     * The component's props.
     *
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->componentName = class_basename($this);
    }

    /**
     * Get the path to the React component.
     */
    public function component(): string
    {
        return "resources/js/Components/{$this->componentName}/index.js";
    }

    /**
     * Get the data to be passed to the React component.
     */
    public function mingleData(): array
    {
        return $this->props;
    }

    /**
     * Render the component.
     */
    public function render()
    {
        return view('mantine::components.base');
    }
}
