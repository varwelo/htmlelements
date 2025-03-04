<?php


namespace HtmlElements\Tests\Template\BsButton;


use HtmlElements\Template\BsButton\BsResetButtonTemplate;
use PHPUnit\Framework\TestCase;

class BsResetButtonTemplateTest extends TestCase
{
    use \HtmlElements\Tests\Includes\tAccessToPrivate;

    private BsResetButtonTemplate $obj;

    protected function setUp(): void
    {
        $this->obj = new BsResetButtonTemplate();
    }

    protected function tearDown(): void
    {

    }

    public function testStylePropertyAfterConstruct()
    {
        $this->setAccessToPrivateProperty($this->obj, 'style');
        $this->assertSame('secondary', $this->privateProperty->getValue($this->obj));
    }

    public function testApplyForButtonTagAfterConstruct()
    {
        $resetButtonTag = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
        $this->obj->applyForButtonTag($resetButtonTag);
        $this->assertSame('<button type="reset" class="btn btn-secondary">Reset</button>', $resetButtonTag->render());
    }
}
