<?php

use PHPUnit\Framework\TestCase;

class InputTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\InputTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<input>', $this->obj->render());
    }
}
