<?php

namespace Tests\Unit\Components;

use MantineBlade\Components\Button;
use PHPUnit\Framework\TestCase;

class ButtonTest extends TestCase
{
    /** @test */
    public function it_renders_with_default_properties()
    {
        $button = new Button();
        
        $this->assertNull($button->variant);
        $this->assertNull($button->color);
        $this->assertNull($button->gradient);
        $this->assertNull($button->size);
        $this->assertNull($button->radius);
        $this->assertNull($button->fullWidth);
        $this->assertNull($button->disabled);
        $this->assertNull($button->loading);
        $this->assertNull($button->loaderProps);
    }

    /** @test */
    public function it_can_be_instantiated_with_custom_properties()
    {
        $button = new Button(
            variant: 'filled',
            color: 'blue',
            gradient: ['from' => 'blue', 'to' => 'cyan'],
            size: 'lg',
            radius: 'xl',
            fullWidth: true,
            disabled: true,
            loading: true,
            loaderProps: ['size' => 'sm']
        );

        $this->assertEquals('filled', $button->variant);
        $this->assertEquals('blue', $button->color);
        $this->assertEquals(['from' => 'blue', 'to' => 'cyan'], $button->gradient);
        $this->assertEquals('lg', $button->size);
        $this->assertEquals('xl', $button->radius);
        $this->assertTrue($button->fullWidth);
        $this->assertTrue($button->disabled);
        $this->assertTrue($button->loading);
        $this->assertEquals(['size' => 'sm'], $button->loaderProps);
    }
}
