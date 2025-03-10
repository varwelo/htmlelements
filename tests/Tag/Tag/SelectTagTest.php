<?php


namespace HtmlElements\Tests\Tag\Tag;


use PHPUnit\Framework\TestCase;

class SelectTagTest extends TestCase
{
    private \HtmlElements\Tag\Tag\SelectTag $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\Tag\SelectTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<select></select>', $this->obj->render());
    }

    public function testRenderAfterAdd()
    {
        $optionTag = (new \HtmlElements\Tag\Tag\OptionTag())->setContent('item1');
        $this->obj->add($optionTag);
        $this->assertSame('<select><option>item1</option></select>', $this->obj->render());
    }
}
