<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Component Prefix
    |--------------------------------------------------------------------------
    |
    | This value sets the prefix for Mantine-Blade components. This is useful 
    | when you want to avoid conflicts with other libraries. Set to empty
    | string if you don't want any prefix.
    |
    */
    'prefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Stylesheets
    |--------------------------------------------------------------------------
    |
    | Configure which Mantine stylesheets should be loaded. By default, only
    | global styles and core component styles are enabled. Enable additional
    | styles as needed. Note: Some components require other components' styles
    | to work properly (e.g., Button requires UnstyledButton).
    |
    */
    'stylesheets' => [
        // Required global styles
        '@mantine/core/styles/global.css' => true,

        // Core components that are commonly used as dependencies
        '@mantine/core/styles/ScrollArea.css' => true,
        '@mantine/core/styles/UnstyledButton.css' => true,
        '@mantine/core/styles/VisuallyHidden.css' => true,
        '@mantine/core/styles/Paper.css' => true,
        '@mantine/core/styles/Popover.css' => true,
        '@mantine/core/styles/CloseButton.css' => true,
        '@mantine/core/styles/Group.css' => true,
        '@mantine/core/styles/Loader.css' => true,
        '@mantine/core/styles/Overlay.css' => true,
        '@mantine/core/styles/ModalBase.css' => true,
        '@mantine/core/styles/Input.css' => true,
        '@mantine/core/styles/InlineInput.css' => true,
        '@mantine/core/styles/Flex.css' => true,

        // Individual component styles - enable as needed
        '@mantine/core/styles/Accordion.css' => false,
        '@mantine/core/styles/ActionIcon.css' => false,
        '@mantine/core/styles/Affix.css' => false,
        '@mantine/core/styles/Alert.css' => false,
        '@mantine/core/styles/AspectRatio.css' => false,
        '@mantine/core/styles/Anchor.css' => false,
        '@mantine/core/styles/AppShell.css' => true,  // Enabled for AppShell component
        '@mantine/core/styles/Avatar.css' => false,
        '@mantine/core/styles/BackgroundImage.css' => false,
        '@mantine/core/styles/Badge.css' => false,
        '@mantine/core/styles/Blockquote.css' => false,
        '@mantine/core/styles/Breadcrumbs.css' => false,
        '@mantine/core/styles/Button.css' => true,  // Enabled for Button component
        '@mantine/core/styles/Burger.css' => true,  // Required by AppShell
        '@mantine/core/styles/Card.css' => false,
        '@mantine/core/styles/Center.css' => false,
        '@mantine/core/styles/Checkbox.css' => false,
        '@mantine/core/styles/CheckboxCard.css' => false,
        '@mantine/core/styles/CheckboxIndicator.css' => false,
        '@mantine/core/styles/Chip.css' => false,
        '@mantine/core/styles/Code.css' => false,
        '@mantine/core/styles/ColorInput.css' => false,
        '@mantine/core/styles/ColorPicker.css' => false,
        '@mantine/core/styles/ColorSwatch.css' => false,
        '@mantine/core/styles/Combobox.css' => false,
        '@mantine/core/styles/Container.css' => false,
        '@mantine/core/styles/Dialog.css' => false,
        '@mantine/core/styles/Divider.css' => false,
        '@mantine/core/styles/Drawer.css' => false,
        '@mantine/core/styles/Fieldset.css' => false,
        '@mantine/core/styles/FloatingIndicator.css' => false,
        '@mantine/core/styles/Grid.css' => false,
        '@mantine/core/styles/Image.css' => false,
        '@mantine/core/styles/Indicator.css' => false,
        '@mantine/core/styles/Kbd.css' => false,
        '@mantine/core/styles/List.css' => false,
        '@mantine/core/styles/LoadingOverlay.css' => false,
        '@mantine/core/styles/Mark.css' => false,
        '@mantine/core/styles/Menu.css' => false,
        '@mantine/core/styles/Modal.css' => false,
        '@mantine/core/styles/NavLink.css' => false,
        '@mantine/core/styles/Notification.css' => false,
        '@mantine/core/styles/NumberInput.css' => false,
        '@mantine/core/styles/Pagination.css' => false,
        '@mantine/core/styles/PasswordInput.css' => false,
        '@mantine/core/styles/Pill.css' => false,
        '@mantine/core/styles/PillsInput.css' => false,
        '@mantine/core/styles/PinInput.css' => false,
        '@mantine/core/styles/Progress.css' => false,
        '@mantine/core/styles/Radio.css' => false,
        '@mantine/core/styles/RadioCard.css' => false,
        '@mantine/core/styles/RadioIndicator.css' => false,
        '@mantine/core/styles/Rating.css' => false,
        '@mantine/core/styles/RingProgress.css' => false,
        '@mantine/core/styles/SegmentedControl.css' => false,
        '@mantine/core/styles/SemiCircleProgress.css' => false,
        '@mantine/core/styles/SimpleGrid.css' => false,
        '@mantine/core/styles/Skeleton.css' => false,
        '@mantine/core/styles/Slider.css' => false,
        '@mantine/core/styles/Spoiler.css' => false,
        '@mantine/core/styles/Stack.css' => false,
        '@mantine/core/styles/Stepper.css' => false,
        '@mantine/core/styles/Switch.css' => false,
        '@mantine/core/styles/Table.css' => false,
        '@mantine/core/styles/Tabs.css' => false,
        '@mantine/core/styles/Text.css' => false,
        '@mantine/core/styles/ThemeIcon.css' => false,
        '@mantine/core/styles/Timeline.css' => false,
        '@mantine/core/styles/Title.css' => false,
        '@mantine/core/styles/Tooltip.css' => false,
        '@mantine/core/styles/Tree.css' => false,
        '@mantine/core/styles/TypographyStylesProvider.css' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Props
    |--------------------------------------------------------------------------
    |
    | Configure default props for components. These can be overridden
    | on a per-component basis.
    |
    */
    'defaults' => [
        'appshell' => [
            'padding' => 'md',
            'layout' => 'default',
            'withBorder' => true,
            'zIndex' => 200,
            'transitionDuration' => 200,
            'transitionTimingFunction' => 'ease',
            'header' => [
                'height' => 60,
                'withBorder' => true,
                'zIndex' => 200,
            ],
            'navbar' => [
                'width' => 300,
                'breakpoint' => 'sm',
                'withBorder' => true,
                'zIndex' => 200,
            ],
            'aside' => [
                'width' => 300,
                'breakpoint' => 'sm',
                'withBorder' => true,
                'zIndex' => 200,
            ],
            'footer' => [
                'height' => 60,
                'withBorder' => true,
                'zIndex' => 200,
            ],
        ],
    ],
];
