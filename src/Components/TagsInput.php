<?php

namespace MantineBlade\Components;

class TagsInput extends MantineComponent
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
        public ?bool $clearable = null,
        public mixed $searchValue = null,
        public mixed $onSearchChange = null,
        public ?int $maxTags = null,
        public ?bool $acceptValueOnBlur = null,
        public ?bool $allowDuplicates = null,
        public mixed $splitChars = null,
        public mixed $filter = null,
        public ?int $limit = null,
        public mixed $renderOption = null,
        public mixed $maxDropdownHeight = null,
        public ?bool $withScrollArea = null,
        public ?bool $dropdownOpened = null,
        public mixed $comboboxProps = null,
        public ?bool $readOnly = null,
        public ?bool $disabled = null,
        public ?string $placeholder = null,
        public ?string $ariaLabel = null,
        public mixed $wrapperProps = null,
        public mixed $clearButtonProps = null,
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
            'clearable' => $clearable,
            'searchValue' => $searchValue,
            'onSearchChange' => $onSearchChange,
            'maxTags' => $maxTags,
            'acceptValueOnBlur' => $acceptValueOnBlur,
            'allowDuplicates' => $allowDuplicates,
            'splitChars' => $splitChars,
            'filter' => $filter,
            'limit' => $limit,
            'renderOption' => $renderOption,
            'maxDropdownHeight' => $maxDropdownHeight,
            'withScrollArea' => $withScrollArea,
            'dropdownOpened' => $dropdownOpened,
            'comboboxProps' => $comboboxProps,
            'readOnly' => $readOnly,
            'disabled' => $disabled,
            'placeholder' => $placeholder,
            'aria-label' => $ariaLabel,
            'wrapperProps' => $wrapperProps,
            'clearButtonProps' => $clearButtonProps,
        ];
    }
}
