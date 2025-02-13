<?php

use PHPUnit\Framework\TestCase;

class ElementSTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Base\ElementS('input');
    }

    protected function tearDown(): void
    {

    }

    public function testToString()
    {
        $this->assertSame('<input>', (string)$this->obj);
    }
}
