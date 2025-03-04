<?php


namespace HtmlElements\Tests\Tag\Base;


use \PHPUnit\Framework\TestCase;

class tTagAttrsTest extends TestCase
{
    use \HtmlElements\Tests\Includes\tAccessToPrivate;

    private $obj;

    protected function setUp(): void
    {
        $this->obj = new class () { use \HtmlElements\Tag\Base\tTagAttrs; };
    }

    protected function tearDown(): void
    {

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
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->addClass('foo');
        $this->assertSame('foo', $this->privateProperty->getValue($this->obj)['class']);
    }

    public function testAddClassAgain()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->addClass('foo')->addClass('foo');
        $this->assertSame('foo', $this->privateProperty->getValue($this->obj)['class']);
    }

    public function testRemoveClass()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->addClass('foo')->removeClass('foo');
        $this->assertArrayNotHasKey('class', $this->privateProperty->getValue($this->obj));
    }

    public function testRemoveClassIfTheClassNotExists()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->addClass('foo')->removeClass('bar');
        $this->assertSame('foo', $this->privateProperty->getValue($this->obj)['class']);
    }

    /* [[-- Multiple add/remove ---- */
    /* It is not recommended to add/remove multiple classes in the addClass()/removeClass method.
       This can lead to duplication of classes */
    public function testAddClassMultiple()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');
        $this->obj->addClass('foo')->addClass('bar baz');
        $this->assertSame('foo bar baz', $this->privateProperty->getValue($this->obj)['class']);
    }

    public function testRemoveClassMultipleNotWorking()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');

        $this->obj->addClass('foo')->addClass('bar')->addClass('baz');

        $this->obj->removeClass('bar baz');
        $this->assertSame('foo bar baz', $this->privateProperty->getValue($this->obj)['class']);

        $this->obj->removeClass('foo bar baz');
        $this->assertSame('foo bar baz', $this->privateProperty->getValue($this->obj)['class']);
    }

    public function testAddClassMultipleWithDuplicate()
    {
        $this->setAccessToPrivateProperty($this->obj,'attrs');

        $this->obj->addClass('foo')->addClass('foo bar');
        $this->assertSame('foo foo bar', $this->privateProperty->getValue($this->obj)['class']);

        // only one class duplicate is deleted
        $this->obj->removeClass('foo');
        $this->assertSame('foo bar', $this->privateProperty->getValue($this->obj)['class']);

        $this->obj->addClass('foo bar');
        $this->assertSame('foo bar foo bar', $this->privateProperty->getValue($this->obj)['class']);
    }
    /* ---- Multiple add/remove --]] */
    /* --- Classes --] */
}
