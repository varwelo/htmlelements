<?php

use PHPUnit\Framework\TestCase;

class OptionTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\OptionTag();
    }

    protected function tearDown(): void
    {

    }

    public function testToStringAfterConstruct()
    {
        $this->assertSame('<option></option>', (string)$this->obj);
    }

    public function testToStringAfterSetSelected()
    {
        $this->obj->setSelected();
        $this->assertSame('<option selected></option>', (string)$this->obj);
    }
}
