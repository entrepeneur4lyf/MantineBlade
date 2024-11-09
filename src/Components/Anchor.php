<?php

namespace MantineBlade\Components;

class Anchor extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $component = null,
        public mixed $href = null,
        public mixed $target = null,
        public mixed $rel = null,
        public mixed $underline = null,
        public mixed $variant = null,
        public mixed $gradient = null,
        public mixed $size = null,
        public mixed $fw = null,
        public mixed $fz = null,
        public mixed $lh = null,
        public mixed $fs = null,
        public mixed $lts = null,
        public mixed $ta = null,
        public mixed $tt = null,
        public mixed $td = null,
        public mixed $onClick = null,
    ) {
        parent::__construct();

        $this->props = [
            'component' => $component,
            'href' => $href,
            'target' => $target,
            'rel' => $rel,
            'underline' => $underline,
            'variant' => $variant,
            'gradient' => $gradient,
            'size' => $size,
            'fw' => $fw,
            'fz' => $fz,
            'lh' => $lh,
            'fs' => $fs,
            'lts' => $lts,
            'ta' => $ta,
            'tt' => $tt,
            'td' => $td,
            'onClick' => $onClick,
        ];
    }
}
