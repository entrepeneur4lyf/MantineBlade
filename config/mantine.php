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
        '@mantine/core/styles/Accordion.css' => true,
        '@mantine/core/styles/ActionIcon.css' => true,
        '@mantine/core/styles/Affix.css' => true,
        '@mantine/core/styles/Alert.css' => true,
        '@mantine/core/styles/AspectRatio.css' => true,
        '@mantine/core/styles/Anchor.css' => true,
        '@mantine/core/styles/AppShell.css' => true,  // Enabled for AppShell component
        '@mantine/core/styles/Avatar.css' => true,
        '@mantine/core/styles/BackgroundImage.css' => true,
        '@mantine/core/styles/Badge.css' => true,
        '@mantine/core/styles/Blockquote.css' => true,
        '@mantine/core/styles/Breadcrumbs.css' => true,
        '@mantine/core/styles/Button.css' => true,  // Enabled for Button component
        '@mantine/core/styles/Burger.css' => true,  // Required by AppShell
        '@mantine/core/styles/Card.css' => true,
        '@mantine/core/styles/Center.css' => true,
        '@mantine/core/styles/Checkbox.css' => true,
        '@mantine/core/styles/CheckboxCard.css' => true,
        '@mantine/core/styles/CheckboxIndicator.css' => true,
        '@mantine/core/styles/Chip.css' => true,
        '@mantine/core/styles/Code.css' => true,
        '@mantine/core/styles/ColorInput.css' => true,
        '@mantine/core/styles/ColorPicker.css' => true,
        '@mantine/core/styles/ColorSwatch.css' => true,
        '@mantine/core/styles/Combobox.css' => true,
        '@mantine/core/styles/Container.css' => true,
        '@mantine/core/styles/Dialog.css' => true,
        '@mantine/core/styles/Divider.css' => true,
        '@mantine/core/styles/Drawer.css' => true,
        '@mantine/core/styles/Fieldset.css' => true,
        '@mantine/core/styles/FloatingIndicator.css' => true,
        '@mantine/core/styles/Grid.css' => true,
        '@mantine/core/styles/Image.css' => true,
        '@mantine/core/styles/Indicator.css' => true,
        '@mantine/core/styles/Kbd.css' => true,
        '@mantine/core/styles/List.css' => true,
        '@mantine/core/styles/LoadingOverlay.css' => true,
        '@mantine/core/styles/Mark.css' => true,
        '@mantine/core/styles/Menu.css' => true,
        '@mantine/core/styles/Modal.css' => true,
        '@mantine/core/styles/NavLink.css' => true,
        '@mantine/core/styles/Notification.css' => true,
        '@mantine/core/styles/NumberInput.css' => true,
        '@mantine/core/styles/Pagination.css' => true,
        '@mantine/core/styles/PasswordInput.css' => true,
        '@mantine/core/styles/Pill.css' => true,
        '@mantine/core/styles/PillsInput.css' => true,
        '@mantine/core/styles/PinInput.css' => true,
        '@mantine/core/styles/Progress.css' => true,
        '@mantine/core/styles/Radio.css' => true,
        '@mantine/core/styles/RadioCard.css' => true,
        '@mantine/core/styles/RadioIndicator.css' => true,
        '@mantine/core/styles/Rating.css' => true,
        '@mantine/core/styles/RingProgress.css' => true,
        '@mantine/core/styles/SegmentedControl.css' => true,
        '@mantine/core/styles/SemiCircleProgress.css' => true,
        '@mantine/core/styles/SimpleGrid.css' => true,
        '@mantine/core/styles/Skeleton.css' => true,
        '@mantine/core/styles/Slider.css' => true,
        '@mantine/core/styles/Spoiler.css' => true,
        '@mantine/core/styles/Stack.css' => true,
        '@mantine/core/styles/Stepper.css' => true,
        '@mantine/core/styles/Switch.css' => true,
        '@mantine/core/styles/Table.css' => true,
        '@mantine/core/styles/Tabs.css' => true,
        '@mantine/core/styles/Text.css' => true,
        '@mantine/core/styles/ThemeIcon.css' => true,
        '@mantine/core/styles/Timeline.css' => true,
        '@mantine/core/styles/Title.css' => true,
        '@mantine/core/styles/Tooltip.css' => true,
        '@mantine/core/styles/Tree.css' => true,
        '@mantine/core/styles/TypographyStylesProvider.css' => true,

        // Custom styles
        '@mantine/tiptap/styles.css' => true,
        '@mantine/dropzone/styles.css' => false,
        '@mantine/nprogress/styles.css' => false,
        '@gfazioli/mantine-flip/styles.css' => false,
        '@gfazioli/mantine-flip/styles.layer.css' => false,
        'react-querybuilder/dist/query-builder.css' => false,
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
