<?php

namespace MantineBlade\Components;

use Ijpatricio\Mingle\Concerns\InteractsWithMingles;
use Ijpatricio\Mingle\Contracts\HasMingles;
use Livewire\Component;

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
