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

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<option></option>', $this->obj->render());
    }

    public function testRenderAfterSetSelected()
    {
        $this->obj->setSelected();
        $this->assertSame('<option selected></option>', $this->obj->render());
    }
}
