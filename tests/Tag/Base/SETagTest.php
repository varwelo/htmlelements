<?php


namespace HtmlElements\Tests\Tag\Base;


use PHPUnit\Framework\TestCase;

class SETagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\Base\SETag('div');
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
