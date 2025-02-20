<?php

use PHPUnit\Framework\TestCase;

class ElementSETest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Base\ElementSE('div');
    }

    protected function tearDown(): void
    {

    }

    public function testEndTag()
    {
        $this->assertSame('</div>', $this->obj->endTag());
    }

    public function testStartTagAndEndTag()
    {
        $this->assertSame('<div></div>', $this->obj->startTag().$this->obj->endTag());
    }
}
