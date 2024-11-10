<?php

namespace Tests\Unit\Components;

use MantineBlade\Components\Alert;
use PHPUnit\Framework\TestCase;

class AlertTest extends TestCase
{
    /** @test */
    public function it_renders_with_default_properties()
    {
        $alert = new Alert();
        
        $this->assertNull($alert->title);
        $this->assertNull($alert->icon);
        $this->assertNull($alert->variant);
        $this->assertNull($alert->color);
        $this->assertNull($alert->radius);
        $this->assertNull($alert->withCloseButton);
        $this->assertNull($alert->closeButtonLabel);
        $this->assertNull($alert->onClose);
        $this->assertNull($alert->classNames);
    }

    /** @test */
    public function it_can_be_instantiated_with_custom_properties()
    {
        $alert = new Alert(
            title: 'Test Alert',
            icon: 'warning',
            variant: 'filled',
            color: 'red',
            radius: 'lg',
            withCloseButton: true,
            closeButtonLabel: 'Close',
            onClose: 'closeAlert',
            classNames: ['custom-class']
        );

        $this->assertEquals('Test Alert', $alert->title);
        $this->assertEquals('warning', $alert->icon);
        $this->assertEquals('filled', $alert->variant);
        $this->assertEquals('red', $alert->color);
        $this->assertEquals('lg', $alert->radius);
        $this->assertTrue($alert->withCloseButton);
        $this->assertEquals('Close', $alert->closeButtonLabel);
        $this->assertEquals('closeAlert', $alert->onClose);
        $this->assertEquals(['custom-class'], $alert->classNames);
    }
}
