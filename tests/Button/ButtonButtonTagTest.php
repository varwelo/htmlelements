<?php

use PHPUnit\Framework\TestCase;

class ButtonButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Button\ButtonButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button type="button">Button</button>', $this->obj->render());
    }
}
