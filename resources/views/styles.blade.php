{{-- Global styles must be imported first --}}
@if(config('mantine.stylesheets.@mantine/core/styles/global.css', true))
    <link rel="stylesheet" href="@mantine/core/styles/global.css" />
@endif

{{-- Core dependencies that other components might need --}}
@php
    $coreDependencies = [
        '@mantine/core/styles/ScrollArea.css',
        '@mantine/core/styles/UnstyledButton.css',
        '@mantine/core/styles/VisuallyHidden.css',
        '@mantine/core/styles/Paper.css',
        '@mantine/core/styles/Popover.css',
        '@mantine/core/styles/CloseButton.css',
        '@mantine/core/styles/Group.css',
        '@mantine/core/styles/Loader.css',
        '@mantine/core/styles/Overlay.css',
        '@mantine/core/styles/ModalBase.css',
        '@mantine/core/styles/Input.css',
        '@mantine/core/styles/InlineInput.css',
        '@mantine/core/styles/Flex.css',
    ];
@endphp

@foreach($coreDependencies as $style)
    @if(config("mantine.stylesheets.{$style}", false))
        <link rel="stylesheet" href="{{ $style }}" />
    @endif
@endforeach

{{-- Component styles --}}
@foreach(config('mantine.stylesheets', []) as $style => $enabled)
    @if($enabled && !in_array($style, array_merge(['@mantine/core/styles/global.css'], $coreDependencies)))
        <link rel="stylesheet" href="{{ $style }}" />
    @endif
@endforeach
