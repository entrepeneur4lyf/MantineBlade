<?php

namespace MantineBlade\Components;

class Autocomplete extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $data = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?string $label = null,
        public ?string $description = null,
        public mixed $error = null,
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $withAsterisk = null,
        public mixed $leftSection = null,
        public mixed $rightSection = null,
        public mixed $leftSectionWidth = null,
        public mixed $rightSectionWidth = null,
        public ?string $leftSectionPointerEvents = null,
        public ?string $rightSectionPointerEvents = null,
        public mixed $filter = null,
        public ?int $limit = null,
        public mixed $maxDropdownHeight = null,
        public ?bool $withScrollArea = null,
        public mixed $renderOption = null,
        public ?bool $dropdownOpened = null,
        public mixed $comboboxProps = null,
        public ?bool $readOnly = null,
        public ?bool $disabled = null,
        public ?string $placeholder = null,
        public ?string $ariaLabel = null,
        public mixed $wrapperProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'data' => $data,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'withAsterisk' => $withAsterisk,
            'leftSection' => $leftSection,
            'rightSection' => $rightSection,
            'leftSectionWidth' => $leftSectionWidth,
            'rightSectionWidth' => $rightSectionWidth,
            'leftSectionPointerEvents' => $leftSectionPointerEvents,
            'rightSectionPointerEvents' => $rightSectionPointerEvents,
            'filter' => $filter,
            'limit' => $limit,
            'maxDropdownHeight' => $maxDropdownHeight,
            'withScrollArea' => $withScrollArea,
            'renderOption' => $renderOption,
            'dropdownOpened' => $dropdownOpened,
            'comboboxProps' => $comboboxProps,
            'readOnly' => $readOnly,
            'disabled' => $disabled,
            'placeholder' => $placeholder,
            'aria-label' => $ariaLabel,
            'wrapperProps' => $wrapperProps,
        ];
    }
}
