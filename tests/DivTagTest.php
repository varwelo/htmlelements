<?php

use PHPUnit\Framework\TestCase;

class DivTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\DivTag();
    }

    protected function tearDown(): void
    {

    }

    public function testToStringAfterConstruct()
    {
        $this->assertSame('<div></div>', (string)$this->obj);
    }

    public function testToStringAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<div>foobar</div>', (string)$this->obj);
    }
}
