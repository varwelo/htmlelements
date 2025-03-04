<?php


namespace HtmlElements\Tests\TagPlus\Button;


use PHPUnit\Framework\TestCase;

class SubmitButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button type="submit">Submit</button>', $this->obj->render());
    }
}
