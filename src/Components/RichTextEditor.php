<?php

namespace MantineBlade\Components;

/**
 * Rich Text Editor Component
 *
 * A TipTap-based rich text editor component that provides a familiar editing experience.
 * Supports various text formatting options, lists, links, and other extensions.
 *
 * @link https://mantine.dev/x/tiptap/
 *
 * @property mixed $editor TipTap editor instance
 * @property mixed $withTypographyStyles Enable/disable default typography styles
 * @property mixed $labels Localization labels for controls
 * @property mixed $stickyOffset Offset for sticky toolbar
 * @property mixed $classNames Custom class names
 * @property mixed $styles Custom styles
 */
class RichTextEditor extends MantineComponent
{
    /**
     * Create a new component instance.
     *
     * @param mixed $editor TipTap editor instance
     * @param mixed $withTypographyStyles Enable default typography styles
     * @param mixed $labels Control labels for localization
     * @param mixed $stickyOffset Offset for sticky toolbar
     * @param mixed $classNames Custom class names
     * @param mixed $styles Custom styles
     */
    public function __construct(
        public mixed $editor = null,
        public mixed $content = null,
        public mixed $withTypographyStyles = true,
        public mixed $labels = null,
        public mixed $stickyOffset = null,
        public mixed $classNames = null,
        public mixed $styles = null,
        public mixed $sanitize = false,
    ) {
        parent::__construct();

        // Initialize Tiptap editor if content is provided
        if ($this->content) {
            $tiptap = new \Tiptap\Editor();
            
            // Sanitize content if requested
            if ($this->sanitize) {
                $this->content = $tiptap->sanitize($this->content);
            }

            // Convert HTML to Tiptap JSON if HTML content provided
            if (is_string($this->content) && str_contains($this->content, '<')) {
                $this->content = $tiptap->setContent($this->content)->getDocument();
            }
        }

        $this->props = [
            'editor' => $editor,
            'content' => $this->content,
            'withTypographyStyles' => $withTypographyStyles,
            'labels' => $labels,
            'stickyOffset' => $stickyOffset,
            'classNames' => $classNames,
            'styles' => $styles,
        ];
    }

    /**
     * Get the editor content as HTML
     *
     * @return string
     */
    public function getHTML()
    {
        if (!$this->content) {
            return '';
        }

        return (new \Tiptap\Editor)->setContent($this->content)->getHTML();
    }

    /**
     * Get the editor content as plain text
     * 
     * @param array $options Options for text conversion
     * @return string
     */
    public function getText($options = [])
    {
        if (!$this->content) {
            return '';
        }

        return (new \Tiptap\Editor)->setContent($this->content)->getText($options);
    }
}

/**
 * RichTextEditor Toolbar Component
 */
class RichTextEditorToolbar extends MantineComponent
{
    public function __construct(
        public mixed $sticky = null,
        public mixed $stickyOffset = null,
    ) {
        parent::__construct();
        
        $this->props = [
            'sticky' => $sticky,
            'stickyOffset' => $stickyOffset,
        ];
    }
}

/**
 * RichTextEditor Content Component
 */
class RichTextEditorContent extends MantineComponent
{
    public function __construct() {
        parent::__construct();
        $this->props = [];
    }
}

/**
 * RichTextEditor Control Component
 */
class RichTextEditorControl extends MantineComponent
{
    public function __construct(
        public mixed $active = null,
        public mixed $disabled = null,
        public mixed $icon = null,
    ) {
        parent::__construct();
        
        $this->props = [
            'active' => $active,
            'disabled' => $disabled,
            'icon' => $icon,
        ];
    }
}

/**
 * RichTextEditor Controls Group Component
 */
class RichTextEditorControlsGroup extends MantineComponent
{
    public function __construct() {
        parent::__construct();
        $this->props = [];
    }
}
