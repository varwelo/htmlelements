<?php

use PHPUnit\Framework\TestCase;

class ButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Button\ButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button type="button"></button>', $this->obj->render());
    }

    public function testRenderAfterSetContent()
    {
        $this->obj->setContent('Button');
        $this->assertSame('<button type="button">Button</button>', $this->obj->render());
    }
}
