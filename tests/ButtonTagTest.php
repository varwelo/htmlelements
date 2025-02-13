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

    public function testToStringAfterConstruct()
    {
        $this->assertSame('<button></button>', (string)$this->obj);
    }

    public function testToStringAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<button>foobar</button>', (string)$this->obj);
    }
}
