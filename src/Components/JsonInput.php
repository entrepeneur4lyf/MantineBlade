<?php

namespace MantineBlade\Components;

class JsonInput extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $description = null,
        public ?string $error = null,
        public ?string $placeholder = null,
        public ?string $validationError = null,
        public ?bool $formatOnBlur = null,
        public ?bool $autosize = null,
        public ?int $minRows = null,
        public ?string $variant = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?bool $disabled = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?bool $required = null,
        public ?bool $withAsterisk = null,
    ) {
        parent::__construct();

        $this->props = [
            'label' => $label,
            'description' => $description,
            'error' => $error,
            'placeholder' => $placeholder,
            'validationError' => $validationError,
            'formatOnBlur' => $formatOnBlur,
            'autosize' => $autosize,
            'minRows' => $minRows,
            'variant' => $variant,
            'size' => $size,
            'radius' => $radius,
            'disabled' => $disabled,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'required' => $required,
            'withAsterisk' => $withAsterisk,
        ];
    }
}
