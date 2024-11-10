<?php

namespace MantineBlade\Components;

class DateTimePicker extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $value = null,
        public mixed $defaultValue = null,
        public mixed $onChange = null,
        public mixed $valueFormat = null,
        public mixed $withSeconds = null,
        public mixed $clearable = null,
        public mixed $dropdownType = null,
        public mixed $disabled = null,
        public mixed $size = null,
        public mixed $label = null,
        public mixed $description = null,
        public mixed $error = null,
        public mixed $variant = null,
        public mixed $withAsterisk = null,
        public mixed $radius = null,
        public mixed $placeholder = null,
        public mixed $required = null,
        public mixed $readOnly = null,
        public mixed $name = null,
        public mixed $form = null,
        public mixed $id = null,
        public mixed $ref = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'value' => $value,
            'defaultValue' => $defaultValue,
            'onChange' => $onChange,
            'valueFormat' => $valueFormat,
            'withSeconds' => $withSeconds,
            'clearable' => $clearable,
            'dropdownType' => $dropdownType,
            'disabled' => $disabled,
            'size' => $size,
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'variant' => $variant,
            'withAsterisk' => $withAsterisk,
            'radius' => $radius,
            'placeholder' => $placeholder,
            'required' => $required,
            'readOnly' => $readOnly,
            'name' => $name,
            'form' => $form,
            'id' => $id,
            'ref' => $ref,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
