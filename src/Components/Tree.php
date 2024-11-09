<?php

namespace MantineBlade\Components;

class Tree extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $tree = null,
        public mixed $renderNode = null,
        public mixed $levelOffset = null,
        public mixed $expandOnClick = null,
        public mixed $selectOnClick = null,
        public mixed $clearSelectionOnOutsideClick = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'tree' => $tree,
            'renderNode' => $renderNode,
            'levelOffset' => $levelOffset,
            'expandOnClick' => $expandOnClick,
            'selectOnClick' => $selectOnClick,
            'clearSelectionOnOutsideClick' => $clearSelectionOnOutsideClick,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
