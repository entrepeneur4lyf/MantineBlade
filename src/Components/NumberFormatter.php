<?php

namespace MantineBlade\Components;

class NumberFormatter extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public mixed $prefix = null,
        public mixed $suffix = null,
        public mixed $thousandSeparator = null,
        public mixed $decimalSeparator = null,
        public mixed $thousandsGroupStyle = null,
        public mixed $decimalScale = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'prefix' => $prefix,
            'suffix' => $suffix,
            'thousandSeparator' => $thousandSeparator,
            'decimalSeparator' => $decimalSeparator,
            'thousandsGroupStyle' => $thousandsGroupStyle,
            'decimalScale' => $decimalScale,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
