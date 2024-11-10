<?php

namespace MantineBlade\Components;

class CodeHighlight extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $code = null,
        public mixed $language = null,
        public mixed $copyLabel = null,
        public mixed $copiedLabel = null,
        public mixed $withCopyButton = null,
        public mixed $withExpandButton = null,
        public mixed $defaultExpanded = null,
        public mixed $expandCodeLabel = null,
        public mixed $collapseCodeLabel = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'code' => $code,
            'language' => $language,
            'copyLabel' => $copyLabel,
            'copiedLabel' => $copiedLabel,
            'withCopyButton' => $withCopyButton,
            'withExpandButton' => $withExpandButton,
            'defaultExpanded' => $defaultExpanded,
            'expandCodeLabel' => $expandCodeLabel,
            'collapseCodeLabel' => $collapseCodeLabel,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
