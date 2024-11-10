<?php

namespace MantineBlade\Components;

class Modal extends MantineComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $opened = null,
        public mixed $onClose = null,
        public mixed $title = null,
        public mixed $centered = null,
        public mixed $withCloseButton = null,
        public mixed $closeButtonProps = null,
        public mixed $overlayProps = null,
        public mixed $size = null,
        public mixed $fullScreen = null,
        public mixed $transitionProps = null,
        public mixed $xOffset = null,
        public mixed $yOffset = null,
        public mixed $radius = null,
        public mixed $scrollAreaComponent = null,
        public mixed $trapFocus = null,
        public mixed $closeOnEscape = null,
        public mixed $closeOnClickOutside = null,
        public mixed $returnFocus = null,
        public mixed $removeScrollProps = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'opened' => $opened,
            'onClose' => $onClose,
            'title' => $title,
            'centered' => $centered,
            'withCloseButton' => $withCloseButton,
            'closeButtonProps' => $closeButtonProps,
            'overlayProps' => $overlayProps,
            'size' => $size,
            'fullScreen' => $fullScreen,
            'transitionProps' => $transitionProps,
            'xOffset' => $xOffset,
            'yOffset' => $yOffset,
            'radius' => $radius,
            'scrollAreaComponent' => $scrollAreaComponent,
            'trapFocus' => $trapFocus,
            'closeOnEscape' => $closeOnEscape,
            'closeOnClickOutside' => $closeOnClickOutside,
            'returnFocus' => $returnFocus,
            'removeScrollProps' => $removeScrollProps,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

class ModalRoot extends MantineComponent
{
    public function __construct(
        public mixed $opened = null,
        public mixed $onClose = null,
        public mixed $trapFocus = null,
        public mixed $closeOnEscape = null,
        public mixed $closeOnClickOutside = null,
        public mixed $returnFocus = null,
        public mixed $removeScrollProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'opened' => $opened,
            'onClose' => $onClose,
            'trapFocus' => $trapFocus,
            'closeOnEscape' => $closeOnEscape,
            'closeOnClickOutside' => $closeOnClickOutside,
            'returnFocus' => $returnFocus,
            'removeScrollProps' => $removeScrollProps,
        ];
    }
}

class ModalOverlay extends MantineComponent
{
    public function __construct(
        public mixed $backgroundOpacity = null,
        public mixed $blur = null,
        public mixed $color = null,
    ) {
        parent::__construct();

        $this->props = [
            'backgroundOpacity' => $backgroundOpacity,
            'blur' => $blur,
            'color' => $color,
        ];
    }
}

class ModalContent extends MantineComponent
{
    public function __construct(
        public mixed $size = null,
        public mixed $radius = null,
        public mixed $centered = null,
        public mixed $fullScreen = null,
        public mixed $xOffset = null,
        public mixed $yOffset = null,
        public mixed $scrollAreaComponent = null,
        public mixed $transitionProps = null,
    ) {
        parent::__construct();

        $this->props = [
            'size' => $size,
            'radius' => $radius,
            'centered' => $centered,
            'fullScreen' => $fullScreen,
            'xOffset' => $xOffset,
            'yOffset' => $yOffset,
            'scrollAreaComponent' => $scrollAreaComponent,
            'transitionProps' => $transitionProps,
        ];
    }
}

class ModalHeader extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}

class ModalTitle extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}

class ModalCloseButton extends MantineComponent
{
    public function __construct(
        public mixed $icon = null,
        public mixed $ariaLabel = null,
    ) {
        parent::__construct();

        $this->props = [
            'icon' => $icon,
            'aria-label' => $ariaLabel,
        ];
    }
}

class ModalBody extends MantineComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->props = [];
    }
}
