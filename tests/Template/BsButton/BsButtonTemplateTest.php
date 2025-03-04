<?php


namespace HtmlElements\Tests\Template\BsButton;


use HtmlElements\Template\BsButton\BsButtonTemplate;
use PHPUnit\Framework\TestCase;

class BsButtonTemplateTest extends TestCase
{
    use \HtmlElements\Tests\Includes\tAccessToPrivate;

    private BsButtonTemplate $obj;

    protected function setUp(): void
    {
        $this->obj = new BsButtonTemplate();
    }

    protected function tearDown(): void
    {

    }

    public function testPropertiesAfterConstruct()
    {
        $this->setAccessToPrivateProperty($this->obj, 'size');
        $this->assertSame('normal', $this->privateProperty->getValue($this->obj));

        $this->setAccessToPrivateProperty($this->obj, 'style');
        $this->assertSame('primary', $this->privateProperty->getValue($this->obj));

        $this->setAccessToPrivateProperty($this->obj, 'outline');
        $this->assertSame(false, $this->privateProperty->getValue($this->obj));
    }

    public function testSetSizeThrowException()
    {
        $this->expectException(\HtmlElements\Exception\BsButtonTemplateException::class);
        $this->expectExceptionMessage('Спроба встановити недоступне значення для size. Доступні: sm, normal, lg');
        $this->obj->setSize('invalid_size');
    }

    public function testSetStyleThrowException()
    {
        $this->expectException(\HtmlElements\Exception\BsButtonTemplateException::class);
        $this->expectExceptionMessage('Спроба встановити недоступне значення для style. Доступні: primary, secondary, success, danger, warning, info, light, dark');
        $this->obj->setStyle('invalid_style');
    }

    public function testSetSize()
    {
        $this->setAccessToPrivateProperty($this->obj, 'size');

        $this->obj->setSize('sm');
        $this->assertSame('sm', $this->privateProperty->getValue($this->obj));

        $this->obj->setSize('normal');
        $this->assertSame('normal', $this->privateProperty->getValue($this->obj));

        $this->obj->setSize('lg');
        $this->assertSame('lg', $this->privateProperty->getValue($this->obj));
    }

    public function testSetStyle()
    {
        $this->setAccessToPrivateProperty($this->obj, 'style');

        $this->obj->setStyle('secondary');
        $this->assertSame('secondary', $this->privateProperty->getValue($this->obj));

        $this->obj->setStyle('success');
        $this->assertSame('success', $this->privateProperty->getValue($this->obj));

        $this->obj->setStyle('danger');
        $this->assertSame('danger', $this->privateProperty->getValue($this->obj));

        $this->obj->setStyle('warning');
        $this->assertSame('warning', $this->privateProperty->getValue($this->obj));

        $this->obj->setStyle('info');
        $this->assertSame('info', $this->privateProperty->getValue($this->obj));

        $this->obj->setStyle('light');
        $this->assertSame('light', $this->privateProperty->getValue($this->obj));

        $this->obj->setStyle('dark');
        $this->assertSame('dark', $this->privateProperty->getValue($this->obj));

        // must bee not first
        $this->obj->setStyle('primary');
        $this->assertSame('primary', $this->privateProperty->getValue($this->obj));
    }

    public function testSetOutline()
    {
        $this->setAccessToPrivateProperty($this->obj, 'outline');

        $this->obj->setOutline(true);
        $this->assertSame(true, $this->privateProperty->getValue($this->obj));

        $this->obj->setOutline(false);
        $this->assertSame(false, $this->privateProperty->getValue($this->obj));
    }
}
