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
        $this->assertSame('<button></button>', $this->obj->render());
    }

    public function testNameAfterConstruct()
    {
        $this->assertSame('button', $this->obj->getName());
    }

    public function testRenderAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<button>foobar</button>', $this->obj->render());
    }
}
