<?php

namespace MantineBlade\Components;

/**
 * MantineList Component
 *
 * The MantineList component creates ordered and unordered lists with customizable markers and nested items.
 * It's commonly used for displaying structured content, navigation menus, or feature lists.
 *
 * @link https://mantine.dev/core/list/
 *
 * @property mixed $type List type ('ordered' or 'unordered')
 * @property mixed $withPadding Add left padding to list items
 * @property mixed $size List size ('xs', 'sm', 'md', 'lg', 'xl')
 * @property mixed $spacing Space between items ('xs', 'sm', 'md', 'lg', 'xl')
 * @property mixed $center Center items vertically with icon
 * @property mixed $icon Custom marker icon for unordered list
 * @property mixed $listStyleType CSS list-style-type property
 * @property mixed $classNames Custom class names for list elements
 * @property mixed $styles Custom styles for list elements
 *
 * @example Basic Usage
 * ```blade
 * <x-mantine-list>
 *     <x-mantine-list-item>First item</x-mantine-list-item>
 *     <x-mantine-list-item>Second item</x-mantine-list-item>
 * </x-mantine-list>
 * ```
 *
 * @example With Custom Icon
 * ```blade
 * <x-mantine-list
 *     :icon="'<i class=\"fas fa-check\"></i>'"
 *     size="lg"
 *     spacing="md"
 * >
 *     <x-mantine-list-item>Feature one</x-mantine-list-item>
 *     <x-mantine-list-item>Feature two</x-mantine-list-item>
 * </x-mantine-list>
 * ```
 */
class MantineList extends MantineComponent
{
    /**
     * Create a new component instance.
     *
     * @param mixed $type List type
     * @param mixed $withPadding Add padding
     * @param mixed $size List size
     * @param mixed $spacing Item spacing
     * @param mixed $center Center items
     * @param mixed $icon Custom marker
     * @param mixed $listStyleType List style
     * @param mixed $classNames Custom classes
     * @param mixed $styles Custom styles
     */
    public function __construct(
        public mixed $type = null,
        public mixed $withPadding = null,
        public mixed $size = null,
        public mixed $spacing = null,
        public mixed $center = null,
        public mixed $icon = null,
        public mixed $listStyleType = null,
        public mixed $classNames = null,
        public mixed $styles = null,
    ) {
        parent::__construct();

        $this->props = [
            'type' => $type,
            'withPadding' => $withPadding,
            'size' => $size,
            'spacing' => $spacing,
            'center' => $center,
            'icon' => $icon,
            'listStyleType' => $listStyleType,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }
}

/**
 * ListItem Component
 *
 * A sub-component of MantineList that represents a single list item.
 * It can contain text, icons, and other components.
 *
 * @property mixed $icon Custom icon for this specific item
 */
class ListItem extends MantineComponent
{
    /**
     * Create a new component instance.
     *
     * @param mixed $icon Custom item icon
     */
    public function __construct(
        public mixed $icon = null,
    ) {
        parent::__construct();

        $this->props = [
            'icon' => $icon,
        ];
    }
} 