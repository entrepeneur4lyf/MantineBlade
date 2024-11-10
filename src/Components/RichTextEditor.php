<?php

namespace MantineBlade\Components;

/**
 * Rich Text Editor Component
 *
 * A TipTap-based rich text editor component that provides a familiar editing experience.
 * Supports various text formatting options, lists, links, and other extensions.
 * 
 * Requires the ueberdosis/tiptap-php package for server-side content handling:
 * composer require ueberdosis/tiptap-php
 *
 * Features:
 * - Text formatting and alignment
 * - Character count and limits
 * - Placeholder support
 * - Typography enhancements
 * - Undo/Redo functionality
 * 
 * @link https://mantine.dev/x/tiptap/
 * @link https://github.com/ueberdosis/tiptap-php
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
        public mixed $sanitize = true, // Enable sanitization by default
        public mixed $placeholder = null,
        public mixed $characterCount = false,
        public mixed $maxLength = null,
        public mixed $textAlign = true,
        // YouTube configuration
        public mixed $youtubeEmbed = false,
        public mixed $youtubeWidth = 640,
        public mixed $youtubeHeight = 480,
        public mixed $youtubeControls = true,
        public mixed $youtubeNoCookie = false,
        public mixed $youtubeModestBranding = false,
        // Feature flags
        public mixed $enableEmoji = false,
        public mixed $enableMentions = false,
        public mixed $enableTasks = false,
        public mixed $enableTables = false,
        public mixed $enableFontFamily = false,
        public mixed $enableBubbleMenu = false,
        public mixed $enableFloatingMenu = false,
        // Table configuration
        public mixed $tableRows = 3,
        public mixed $tableCols = 3,
        // Mention configuration
        public mixed $mentionSuggestions = [],
        public mixed $mentionChar = '@',
        // Typography configuration
        public mixed $enableSuperscript = false,
        public mixed $enableSubscript = false,
        public mixed $enableHighlight = false,
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
            'youtubeEmbed' => $youtubeEmbed,
            'youtubeWidth' => $youtubeWidth,
            'youtubeHeight' => $youtubeHeight,
            'youtubeControls' => $youtubeControls,
            'youtubeNoCookie' => $youtubeNoCookie,
            'youtubeModestBranding' => $youtubeModestBranding,
        ];
    }

    /**
     * Get the editor content as HTML
     *
     * @param array $options Additional options for HTML conversion
     * @return string
     */
    public function getHTML(array $options = [])
    {
        if (!$this->content) {
            return '';
        }

        $editor = new \Tiptap\Editor;
        
        // Configure extensions based on enabled features
        if ($this->enableTables) {
            $editor->addExtension(new \Tiptap\Extensions\Table([
                'rows' => $this->tableRows,
                'cols' => $this->tableCols,
            ]));
        }
        
        if ($this->enableMentions) {
            $editor->addExtension(new \Tiptap\Extensions\Mention([
                'suggestions' => $this->mentionSuggestions,
                'char' => $this->mentionChar,
            ]));
        }
        
        if ($this->enableEmoji) {
            $editor->addExtension(new \Tiptap\Extensions\Emoji());
        }

        if ($this->sanitize) {
            $editor->addExtension(new \Tiptap\Extensions\TextCleaner());
        }

        return $editor->setContent($this->content)->getHTML($options);
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
