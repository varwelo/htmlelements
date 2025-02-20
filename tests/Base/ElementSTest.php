<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/tAccessToPrivate.php';

class ElementSTest extends TestCase
{
    use tAccessToPrivate;

    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Base\ElementS('input');
    }

    protected function tearDown(): void
    {

    }

    public function testRender()
    {
        $this->assertSame('<input>', $this->obj->render());
    }

    /* [-- Attributes --- */
    public function testStartTagIfIssetAttr()
    {
        $this->obj->setAttr('name', 'foo');
        $this->assertSame('<input name="foo">', $this->obj->startTag());
    }

    public function testStartTagIfIssetAttrWithTrueValue()
    {
        $this->obj->setAttr('required');
        $this->assertSame('<input required>', $this->obj->startTag());
    }

    public function testStartTagIfIssetAttrs()
    {
        $this->obj->setAttr('name', 'foo')->setAttr('required')->setAttr('id', 'bar')->setAttr('disabled');
        $this->assertSame('<input name="foo" required id="bar" disabled>', $this->obj->startTag());
    }
    /* ]-- Attributes --- */
}
