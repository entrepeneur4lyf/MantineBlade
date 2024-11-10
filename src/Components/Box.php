<?php

namespace MantineBlade\Components;

class Box extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $component = null,
        public mixed $bg = null,
        public mixed $m = null,
        public mixed $mx = null,
        public mixed $my = null,
        public mixed $mt = null,
        public mixed $mb = null,
        public mixed $ml = null,
        public mixed $mr = null,
        public mixed $p = null,
        public mixed $px = null,
        public mixed $py = null,
        public mixed $pt = null,
        public mixed $pb = null,
        public mixed $pl = null,
        public mixed $pr = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'component' => $component,
            'bg' => $bg,
            'm' => $m,
            'mx' => $mx,
            'my' => $my,
            'mt' => $mt,
            'mb' => $mb,
            'ml' => $ml,
            'mr' => $mr,
            'p' => $p,
            'px' => $px,
            'py' => $py,
            'pt' => $pt,
            'pb' => $pb,
            'pl' => $pl,
            'pr' => $pr,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
