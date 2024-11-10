<?php

namespace MantineBlade\Components;

class Spotlight extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $actions = null,
        public mixed $shortcut = null,
        public mixed $searchProps = null,
        public mixed $nothingFound = null,
        public mixed $highlightQuery = null,
        public mixed $limit = null,
        public mixed $scrollable = null,
        public mixed $maxHeight = null,
        public mixed $query = null,
        public mixed $onQueryChange = null,
        public mixed $store = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'actions' => $actions,
            'shortcut' => $shortcut,
            'searchProps' => $searchProps,
            'nothingFound' => $nothingFound,
            'highlightQuery' => $highlightQuery,
            'limit' => $limit,
            'scrollable' => $scrollable,
            'maxHeight' => $maxHeight,
            'query' => $query,
            'onQueryChange' => $onQueryChange,
            'store' => $store,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
