<?php

use PHPUnit\Framework\TestCase;

class BaseButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new class extends \HtmlElements\Button\BaseButtonTag {};
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button></button>', $this->obj->render());
    }

    public function testNameAfterConstruct()
    {
        $this->assertSame('button', $this->obj->getName());
    }
}
