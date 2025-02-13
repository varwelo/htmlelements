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

    public function testToStringAfterConstruct()
    {
        $this->assertSame('<textarea></textarea>', (string)$this->obj);
    }

    public function testToStringAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<textarea>foobar</textarea>', (string)$this->obj);
    }
}
