<?php

namespace MantineBlade\Components;

class Table extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $captionSide = null,
        public mixed $horizontalSpacing = null,
        public mixed $verticalSpacing = null,
        public mixed $fontSize = null,
        public mixed $striped = null,
        public mixed $highlightOnHover = null,
        public mixed $withTableBorder = null,
        public mixed $withColumnBorders = null,
        public mixed $withRowBorders = null,
        public mixed $stickyHeader = null,
        public mixed $stickyHeaderOffset = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'captionSide' => $captionSide,
            'horizontalSpacing' => $horizontalSpacing,
            'verticalSpacing' => $verticalSpacing,
            'fontSize' => $fontSize,
            'striped' => $striped,
            'highlightOnHover' => $highlightOnHover,
            'withTableBorder' => $withTableBorder,
            'withColumnBorders' => $withColumnBorders,
            'withRowBorders' => $withRowBorders,
            'stickyHeader' => $stickyHeader,
            'stickyHeaderOffset' => $stickyHeaderOffset,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class TableScrollContainer extends MantineComponent
{
    public function __construct(
        public mixed $minWidth = null,
        public mixed $type = null,
    ) {
        parent::__construct();

        $this->props = [
            'minWidth' => $minWidth,
            'type' => $type,
        ];
    }
}

class TableCaption extends MantineComponent {}
class TableThead extends MantineComponent {}
class TableTbody extends MantineComponent {}
class TableTfoot extends MantineComponent {}
class TableTr extends MantineComponent {}
class TableTh extends MantineComponent {}
class TableTd extends MantineComponent {}
