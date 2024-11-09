<?php

namespace MantineBlade\Components;

class PinInput extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $size = null,
        public ?int $length = null,
        public ?bool $mask = null,
        public ?string $placeholder = null,
        public ?bool $disabled = null,
        public mixed $error = null,
        public mixed $type = null,
        public ?string $inputType = null,
        public ?string $inputMode = null,
        public ?bool $oneTimeCode = null,
        public mixed $value = null,
        public mixed $defaultValue = null,
        public ?string $ariaLabel = null,
    ) {
        parent::__construct();

        $this->props = [
            'size' => $size,
            'length' => $length,
            'mask' => $mask,
            'placeholder' => $placeholder,
            'disabled' => $disabled,
            'error' => $error,
            'type' => $type,
            'inputType' => $inputType,
            'inputMode' => $inputMode,
            'oneTimeCode' => $oneTimeCode,
            'value' => $value,
            'defaultValue' => $defaultValue,
            'aria-label' => $ariaLabel,
        ];
    }
}
