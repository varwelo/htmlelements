<?php


namespace HtmlElements\Tests\TagPlus\Input;


use PHPUnit\Framework\TestCase;

class CheckboxInputTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\TagPlus\Input\CheckboxInputTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<input type="checkbox" value="1">', $this->obj->render());
    }

    public function testRenderAfterSetAttrName()
    {
        $this->obj->setAttr('name', 'foo');
        $expected = '<input type="hidden" value="0" name="foo"><input type="checkbox" value="1" name="foo">';
        $this->assertSame($expected, $this->obj->render());
    }
}
