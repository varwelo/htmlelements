<?php

use PHPUnit\Framework\TestCase;

class ResetButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button type="reset">Reset</button>', $this->obj->render());
    }
}
