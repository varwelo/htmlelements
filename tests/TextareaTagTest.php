<?php

use PHPUnit\Framework\TestCase;

class TextareaTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\TextareaTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<textarea></textarea>', $this->obj->render());
    }

    public function testRenderAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<textarea>foobar</textarea>', $this->obj->render());
    }
}
