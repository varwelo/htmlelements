<?php

use PHPUnit\Framework\TestCase;

class ResetButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Button\ResetButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button type="reset">Reset</button>', $this->obj->render());
    }
}
