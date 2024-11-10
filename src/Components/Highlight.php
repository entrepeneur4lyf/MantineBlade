<?php

namespace MantineBlade\Components;

class Highlight extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $highlight = null,
        public mixed $highlightStyles = null,
        public mixed $component = null,
        public mixed $color = null,
        public mixed $fw = null,
        public mixed $c = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'highlight' => $highlight,
            'highlightStyles' => $highlightStyles,
            'component' => $component,
            'color' => $color,
            'fw' => $fw,
            'c' => $c,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
