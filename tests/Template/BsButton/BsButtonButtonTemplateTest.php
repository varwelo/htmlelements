<?php


namespace HtmlElements\Tests\Template\BsButton;


use HtmlElements\Template\BsButton\BsButtonButtonTemplate;
use PHPUnit\Framework\TestCase;

class BsButtonButtonTemplateTest extends TestCase
{
    use \HtmlElements\Tests\Includes\tAccessToPrivate;

    private BsButtonButtonTemplate $obj;

    protected function setUp(): void
    {
        $this->obj = new BsButtonButtonTemplate();
    }

    protected function tearDown(): void
    {

    }

    public function testStylePropertyAfterConstruct()
    {
        $this->setAccessToPrivateProperty($this->obj, 'style');
        $this->assertSame('primary', $this->privateProperty->getValue($this->obj));
    }

    public function testApplyForButtonTagAfterConstruct()
    {
        $buttonButtonTag = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
        $this->obj->applyForButtonTag($buttonButtonTag);
        $this->assertSame('<button type="button" class="btn btn-primary">Button</button>', $buttonButtonTag->render());
    }
}
