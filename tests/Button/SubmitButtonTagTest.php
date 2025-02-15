<?php

use PHPUnit\Framework\TestCase;

class SubmitButtonTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Button\SubmitButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<button type="submit"></button>', $this->obj->render());
    }

    public function testRenderAfterSetContent()
    {
        $this->obj->setContent('Submit');
        $this->assertSame('<button type="submit">Submit</button>', $this->obj->render());
    }
}
