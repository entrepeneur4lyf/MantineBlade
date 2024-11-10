<?php

namespace Tests\Unit\Components;

use MantineBlade\Components\CopyButton;
use PHPUnit\Framework\TestCase;

class CopyButtonTest extends TestCase
{
    /** @test */
    public function it_renders_with_default_properties()
    {
        $copyButton = new CopyButton();
        
        $this->assertNull($copyButton->value);
        $this->assertNull($copyButton->timeout);
        $this->assertNull($copyButton->onCopy);
    }

    /** @test */
    public function it_can_be_instantiated_with_custom_properties()
    {
        $copyButton = new CopyButton(
            value: 'Text to copy',
            timeout: 2000,
            onCopy: 'handleCopy'
        );

        $this->assertEquals('Text to copy', $copyButton->value);
        $this->assertEquals(2000, $copyButton->timeout);
        $this->assertEquals('handleCopy', $copyButton->onCopy);
    }

    /** @test */
    public function it_accepts_different_value_types()
    {
        $copyButton1 = new CopyButton(value: 'Simple string');
        $copyButton2 = new CopyButton(value: ['complex' => 'data']);
        $copyButton3 = new CopyButton(value: 12345);

        $this->assertEquals('Simple string', $copyButton1->value);
        $this->assertEquals(['complex' => 'data'], $copyButton2->value);
        $this->assertEquals(12345, $copyButton3->value);
    }
}
