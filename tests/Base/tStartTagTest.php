<?php

use \PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/tAccessToPrivate.php';

class tStartTagTest extends TestCase
{
    use tAccessToPrivate;

    private $obj;

    protected function setUp(): void
    {
        $this->obj = new class ('input') { use \HtmlElements\Base\tStartTag; }; // anonymous class
    }

    protected function tearDown(): void
    {

    }

    public function testNameAfterConstruct()
    {
        $this->setAccessToPrivateProperty($this->obj, 'name');
        $this->assertSame('input', $this->privateProperty->getValue($this->obj));
    }

    public function testStartTagAfterConstruct()
    {
        $this->assertSame('<input>', $this->obj->startTag());
    }

    public function testGetNameAfterConstruct()
    {
        $this->assertSame('input', $this->obj->getName());
    }


    /* [-- Attributes --- */
    public function testGetAttrWithStrValue()
    {
        $this->obj->setAttr('name', 'foo');
        $this->assertSame('foo', $this->obj->getAttr('name'));
    }

    public function testGetAttrWithTrueValue()
    {
        $this->obj->setAttr('required', true);
        $this->assertSame(true, $this->obj->getAttr('required'));
    }

    public function testGetAttrIfNotExists()
    {
        $this->assertSame(null, $this->obj->getAttr('name'));
    }

    public function testSetAttr()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttr('name', 'foo');
        $this->assertSame(['name' => 'foo'], $this->privateProperty->getValue($this->obj));
    }

    public function testSetAttrWithValueOnDefault()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttr('required');
        $this->assertSame(['required' => true], $this->privateProperty->getValue($this->obj));
    }

    public function testSetAttrs()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttrs(['name' => 'foo', 'required' => true]);
        $this->assertSame(['name' => 'foo', 'required' => true], $this->privateProperty->getValue($this->obj));

        $this->obj->setAttrs(['name' => 'bar', 'disabled' => true]);
        $this->assertSame(['name' => 'bar', 'required' => true, 'disabled' => true], $this->privateProperty->getValue($this->obj));
    }

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

    public function testRemoveAttrIfIssetTheAttr()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttr('name', 'foo')->removeAttr('name');
        $this->assertSame([], $this->privateProperty->getValue($this->obj));
    }

    public function testRemoveAttrIfIssetTheAttrWithTrueValue()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttr('required')->removeAttr('required');
        $this->assertSame([], $this->privateProperty->getValue($this->obj));
    }

    public function testRemoveAttrIfIssetTheAttrAndIssetOtherAttr()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttr('name', 'foo')->setAttr('id', 'bar')->removeAttr('name');
        $this->assertSame(['id' => 'bar'], $this->privateProperty->getValue($this->obj));
    }

    public function testRemoveAttrIfIssetTheAttrWithTrueValueAndIssetOtherAttrWithTrueValue()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttr('required')->setAttr('disabled')->removeAttr('required');
        $this->assertSame(['disabled' => true], $this->privateProperty->getValue($this->obj));
    }

    public function testRemoveAttrIfNotIssetTheAttr()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->removeAttr('bar');
        $this->assertSame([], $this->privateProperty->getValue($this->obj));
    }

    public function testRemoveAttrIfNotIssetTheAttrAndIssetOtherAttr()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->setAttr('name', 'foo')->removeAttr('bar');
        $this->assertSame(['name' => 'foo'], $this->privateProperty->getValue($this->obj));
    }
    /* --- Attributes --] */


    /* [-- Classes --- */
    public function testAddClass()
    {
        $this->obj->addClass('foo');
        $this->assertSame('<input class="foo">', $this->obj->startTag());
    }

    public function testAddClassAgain()
    {
        $this->obj->addClass('foo')->addClass('foo');
        $this->assertSame('<input class="foo">', $this->obj->startTag());
    }

    public function testRemoveClass()
    {
        $this->obj->addClass('foo')->removeClass('foo');
        $this->assertSame('<input>', $this->obj->startTag());
    }

    public function testRemoveClassIfTheClassNotExists()
    {
        $this->obj->addClass('foo')->removeClass('bar');
        $this->assertSame('<input class="foo">', $this->obj->startTag());
    }

    /* [[-- Multiple add/remove ---- */
    /* It is not recommended to add/remove multiple classes in the addClass()/removeClass method.
       This can lead to duplication of classes */
    public function testAddClassMultiple()
    {
        $this->obj->addClass('foo')->addClass('bar baz');
        $this->assertSame('<input class="foo bar baz">', $this->obj->startTag());
    }

    public function testRemoveClassMultipleNotWorking()
    {
        $this->obj->addClass('foo')->addClass('bar')->addClass('baz');

        $this->obj->removeClass('bar baz');
        $this->assertSame('<input class="foo bar baz">', $this->obj->startTag());

        $this->obj->removeClass('foo bar baz');
        $this->assertSame('<input class="foo bar baz">', $this->obj->startTag());
    }

    public function testAddClassMultipleWithDuplicate()
    {
        $this->obj->addClass('foo')->addClass('foo bar');
        $this->assertSame('<input class="foo foo bar">', $this->obj->startTag());

        // only one class duplicate is deleted
        $this->obj->removeClass('foo');
        $this->assertSame('<input class="foo bar">', $this->obj->startTag());

        $this->obj->addClass('foo bar');
        $this->assertSame('<input class="foo bar foo bar">', $this->obj->startTag());
    }
    /* ---- Multiple add/remove --]] */
    /* --- Classes --] */
}
