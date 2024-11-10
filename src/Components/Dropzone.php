<?php

namespace MantineBlade\Components;

class Dropzone extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $accept = null,
        public mixed $maxSize = null,
        public mixed $maxFiles = null,
        public mixed $multiple = null,
        public mixed $loading = null,
        public mixed $disabled = null,
        public mixed $openRef = null,
        public mixed $activateOnClick = null,
        public mixed $onDrop = null,
        public mixed $onReject = null,
        public mixed $onDragEnter = null,
        public mixed $onDragLeave = null,
        public mixed $onDragOver = null,
        public mixed $onFileDialogOpen = null,
        public mixed $onFileDialogCancel = null,
        public mixed $active = null,
        public mixed $radius = null,
        public mixed $padding = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'accept' => $accept,
            'maxSize' => $maxSize,
            'maxFiles' => $maxFiles,
            'multiple' => $multiple,
            'loading' => $loading,
            'disabled' => $disabled,
            'openRef' => $openRef,
            'activateOnClick' => $activateOnClick,
            'onDrop' => $onDrop,
            'onReject' => $onReject,
            'onDragEnter' => $onDragEnter,
            'onDragLeave' => $onDragLeave,
            'onDragOver' => $onDragOver,
            'onFileDialogOpen' => $onFileDialogOpen,
            'onFileDialogCancel' => $onFileDialogCancel,
            'active' => $active,
            'radius' => $radius,
            'padding' => $padding,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
