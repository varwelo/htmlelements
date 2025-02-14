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
        $this->assertSame('<label></label>', $this->obj->render());
    }

    public function testToStringAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<label>foobar</label>', $this->obj->render());
    }
}
