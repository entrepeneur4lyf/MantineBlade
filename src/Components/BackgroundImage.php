<?php

namespace MantineBlade\Components;

/**
 * BackgroundImage Component
 *
 * The BackgroundImage component creates a container with a background image that maintains
 * its aspect ratio. It's commonly used for hero sections, cards, and other decorative elements.
 *
 * @link https://mantine.dev/core/background-image/
 *
 * @property mixed $src Image source URL
 * @property mixed $radius Border radius from theme.radius or number for value in px
 * @property mixed $component Underlying element to render ('div', 'section', etc.)
 * @property mixed $classNames Custom class names for background image elements
 * @property mixed $styles Custom styles for background image elements
 *
 * @example Basic Usage
 * ```blade
 * <x-mantine-background-image
 *     src="path/to/image.jpg"
 *     radius="md"
 * >
 *     Content overlaid on the background image
 * </x-mantine-background-image>
 * ```
 *
 * @example As Container
 * ```blade
 * <x-mantine-background-image
 *     src="path/to/image.jpg"
 *     component="section"
 * >
 *     <x-mantine-text c="white">
 *         Text on background image
 *     </x-mantine-text>
 * </x-mantine-background-image>
 * ```
 */
class BackgroundImage extends MantineComponent
{
    /**
     * Create a new component instance.
     *
     * @param mixed $src Image source URL
     * @param mixed $radius Border radius
     * @param mixed $component Underlying element
     * @param mixed $classNames Custom classes
     * @param mixed $styles Custom styles
     */
    public function __construct(
        public mixed $src = null,
        public mixed $radius = null,
        public mixed $component = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'src' => $src,
            'radius' => $radius,
            'component' => $component,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}
