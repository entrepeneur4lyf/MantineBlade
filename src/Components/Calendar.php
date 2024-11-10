<?php

namespace MantineBlade\Components;

class Calendar extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $static = null,
        public mixed $size = null,
        public mixed $renderDay = null,
        public mixed $getDayProps = null,
        public mixed $withCellSpacing = null,
        public mixed $minDate = null,
        public mixed $maxDate = null,
        public mixed $defaultDate = null,
        public mixed $month = null,
        public mixed $onMonthChange = null,
        public mixed $defaultLevel = null,
        public mixed $level = null,
        public mixed $onLevelChange = null,
        public mixed $maxLevel = null,
        public mixed $minLevel = null,
        public mixed $value = null,
        public mixed $onChange = null,
        public mixed $multiple = null,
        public mixed $weekendDays = null,
        public mixed $weekdayFormat = null,
        public mixed $hideOutsideDates = null,
        public mixed $hideWeekdays = null,
        public mixed $firstDayOfWeek = null,
        public mixed $preventFocus = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'static' => $static,
            'size' => $size,
            'renderDay' => $renderDay,
            'getDayProps' => $getDayProps,
            'withCellSpacing' => $withCellSpacing,
            'minDate' => $minDate,
            'maxDate' => $maxDate,
            'defaultDate' => $defaultDate,
            'month' => $month,
            'onMonthChange' => $onMonthChange,
            'defaultLevel' => $defaultLevel,
            'level' => $level,
            'onLevelChange' => $onLevelChange,
            'maxLevel' => $maxLevel,
            'minLevel' => $minLevel,
            'value' => $value,
            'onChange' => $onChange,
            'multiple' => $multiple,
            'weekendDays' => $weekendDays,
            'weekdayFormat' => $weekdayFormat,
            'hideOutsideDates' => $hideOutsideDates,
            'hideWeekdays' => $hideWeekdays,
            'firstDayOfWeek' => $firstDayOfWeek,
            'preventFocus' => $preventFocus,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
