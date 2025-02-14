<?php

use PHPUnit\Framework\TestCase;

class ButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\ButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button></button>', $this->obj->render());
    }

    public function testRenderAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<button>foobar</button>', $this->obj->render());
    }
}
