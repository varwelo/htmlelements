<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../includes/tAccessToPrivate.php';

class BaseSTagTest extends TestCase
{
    use tAccessToPrivate;

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
