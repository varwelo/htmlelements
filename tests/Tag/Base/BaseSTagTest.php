<?php


namespace HtmlElements\Tests\Tag\Base;


use PHPUnit\Framework\TestCase;

class BaseSTagTest extends TestCase
{
    use \HtmlElements\Tests\Includes\tAccessToPrivate;

    private $obj;

    protected function setUp(): void
    {
        $this->obj = new class ('input') extends \HtmlElements\Tag\Base\STag {};
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
}
