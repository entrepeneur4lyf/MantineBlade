<?php

namespace MantineBlade\Components;

class DatePicker extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public mixed $defaultValue = null,
        public mixed $onChange = null,
        public mixed $type = null,
        public mixed $allowDeselect = null,
        public mixed $allowSingleDateInRange = null,
        public mixed $defaultDate = null,
        public mixed $date = null,
        public mixed $onDateChange = null,
        public mixed $defaultLevel = null,
        public mixed $level = null,
        public mixed $onLevelChange = null,
        public mixed $maxLevel = null,
        public mixed $minLevel = null,
        public mixed $hideOutsideDates = null,
        public mixed $hideWeekdays = null,
        public mixed $weekendDays = null,
        public mixed $firstDayOfWeek = null,
        public mixed $renderDay = null,
        public mixed $getDayProps = null,
        public mixed $getYearControlProps = null,
        public mixed $getMonthControlProps = null,
        public mixed $minDate = null,
        public mixed $maxDate = null,
        public mixed $excludeDate = null,
        public mixed $numberOfColumns = null,
        public mixed $size = null,
        public mixed $yearsListFormat = null,
        public mixed $monthsListFormat = null,
        public mixed $decadeLabelFormat = null,
        public mixed $yearLabelFormat = null,
        public mixed $monthLabelFormat = null,
        public mixed $locale = null,
        public mixed $ariaLabels = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'defaultValue' => $defaultValue,
            'onChange' => $onChange,
            'type' => $type,
            'allowDeselect' => $allowDeselect,
            'allowSingleDateInRange' => $allowSingleDateInRange,
            'defaultDate' => $defaultDate,
            'date' => $date,
            'onDateChange' => $onDateChange,
            'defaultLevel' => $defaultLevel,
            'level' => $level,
            'onLevelChange' => $onLevelChange,
            'maxLevel' => $maxLevel,
            'minLevel' => $minLevel,
            'hideOutsideDates' => $hideOutsideDates,
            'hideWeekdays' => $hideWeekdays,
            'weekendDays' => $weekendDays,
            'firstDayOfWeek' => $firstDayOfWeek,
            'renderDay' => $renderDay,
            'getDayProps' => $getDayProps,
            'getYearControlProps' => $getYearControlProps,
            'getMonthControlProps' => $getMonthControlProps,
            'minDate' => $minDate,
            'maxDate' => $maxDate,
            'excludeDate' => $excludeDate,
            'numberOfColumns' => $numberOfColumns,
            'size' => $size,
            'yearsListFormat' => $yearsListFormat,
            'monthsListFormat' => $monthsListFormat,
            'decadeLabelFormat' => $decadeLabelFormat,
            'yearLabelFormat' => $yearLabelFormat,
            'monthLabelFormat' => $monthLabelFormat,
            'locale' => $locale,
            'ariaLabels' => $ariaLabels,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
