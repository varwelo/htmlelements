<?php


namespace HtmlElements\Tests\Tag\Tag;


use PHPUnit\Framework\TestCase;

class FormTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\Tag\FormTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<form></form>', $this->obj->render());
    }
}
