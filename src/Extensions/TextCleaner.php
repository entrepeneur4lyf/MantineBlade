<?php

namespace MantineBlade\Extensions;

use Tiptap\Core\Extension;

class TextCleaner extends Extension
{
    public function sanitize($content)
    {
        // Remove potentially harmful HTML
        $content = strip_tags($content, [
            'p', 'br', 'strong', 'em', 'u', 'strike', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
            'ul', 'ol', 'li', 'blockquote', 'pre', 'code', 'table', 'thead', 'tbody', 'tr', 'th', 'td',
            'img', 'a', 'span', 'div', 'hr'
        ]);
        
        // Clean up attributes
        $content = preg_replace('/javascript:/i', '', $content);
        
        return $content;
    }

    public function parseHTML()
    {
        return [
            [
                'tag' => '*',
                'getAttrs' => function ($dom) {
                    return $this->sanitize($dom->outerHTML);
                },
            ],
        ];
    }
}
