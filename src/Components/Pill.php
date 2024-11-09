<?php

namespace MantineBlade\Components;

class Pill extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?bool $withRemoveButton = null,
        public mixed $onRemove = null,
        public ?string $size = null,
        public mixed $removeButtonProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'withRemoveButton' => $withRemoveButton,
            'onRemove' => $onRemove,
            'size' => $size,
            'removeButtonProps' => $removeButtonProps,
        ];
    }
}
