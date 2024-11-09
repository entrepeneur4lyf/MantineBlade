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
    | Mantine Theme
    |--------------------------------------------------------------------------
    |
    | Configure default theme options for Mantine components. These values will
    | be passed to MantineProvider.
    |
    */
    'theme' => [
        'primaryColor' => 'blue',
        'primaryShade' => 6,
        'radius' => 'sm',
        'white' => '#fff',
        'black' => '#000',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | Configure default classes for components. These can be overridden
    | on a per-component basis.
    |
    */
    'defaults' => [
        'button' => [
            'size' => 'sm',
            'variant' => 'filled',
        ],
        'input' => [
            'size' => 'sm',
        ],
    ],
];