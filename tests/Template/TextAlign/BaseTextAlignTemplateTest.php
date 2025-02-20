<?php

require_once __DIR__ . '/../../includes/tAccessToPrivate.php';


use PHPUnit\Framework\TestCase;

class BaseTextAlignTemplateTest extends TestCase
{
    use tAccessToPrivate;

    private $obj;

    protected function setUp(): void
    {
        $this->obj = new class extends \HtmlElements\Template\TextAlign\BaseTextAlignTemplate
        {
            public function applyForTag(\HtmlElements\Tag\Base\iTagAttrs $tag): \HtmlElements\Template\TextAlign\BaseTextAlignTemplate {return $this;}
        };

        $this->setAccessToPrivateProperty($this->obj, 'align');
    }

    protected function tearDown(): void
    {

    }

    public function testAlignPropertyAfterConstruct()
    {
        $this->assertSame('center', $this->privateProperty->getValue($this->obj));
    }

    public function testAlignPropertyAfterSetAlignLeft()
    {
        $this->obj->setAlignLeft();
        $this->assertSame('left', $this->privateProperty->getValue($this->obj));
    }

    public function testAlignPropertyAfterSetAlignCenter()
    {
        // Changing the Align property so that it is not equal to the value that will be set
        $this->obj->setAlignLeft();

        $this->obj->setAlignCenter();
        $this->assertSame('center', $this->privateProperty->getValue($this->obj));
    }

    public function testAlignPropertyAfterSetAlignRight()
    {
        $this->obj->setAlignRight();
        $this->assertSame('right', $this->privateProperty->getValue($this->obj));
    }
}
