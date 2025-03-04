<?php


namespace HtmlElements\Tests\TagPlus\Input;


use PHPUnit\Framework\TestCase;

class HiddenInputTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\TagPlus\Input\HiddenInputTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<input type="hidden">', $this->obj->render());
    }
}
