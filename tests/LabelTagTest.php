<?php

use PHPUnit\Framework\TestCase;

class LabelTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\LabelTag();
    }

    protected function tearDown(): void
    {

    }

    public function testToStringAfterConstruct()
    {
        $this->assertSame('<label></label>', (string)$this->obj);
    }

    public function testToStringAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<label>foobar</label>', (string)$this->obj);
    }
}
