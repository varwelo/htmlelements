<?php


namespace HtmlElements\Tests\Tag\Tag;


use PHPUnit\Framework\TestCase;

class ATagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\Tag\ATag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<a></a>', $this->obj->render());
    }

    public function testNameAfterConstruct()
    {
        $this->assertSame('a', $this->obj->getName());
    }

    public function testRenderAfterSetContent()
    {
        $this->obj->setContent('foobar');
        $this->assertSame('<a>foobar</a>', $this->obj->render());
    }

    public function testRenderAfterSetAttrHref()
    {
        $this->obj->setAttr('href', '#');
        $this->assertSame('<a href="#"></a>', $this->obj->render());
    }
}
