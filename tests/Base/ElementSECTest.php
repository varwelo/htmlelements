<?php

use PHPUnit\Framework\TestCase;

class ElementSECTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Base\ElementSEC('textarea');
    }

    protected function tearDown(): void
    {

    }

    public function testRender()
    {
        $this->obj->setContent('text');
        $this->assertSame('<textarea>text</textarea>', $this->obj->render());
    }
}
