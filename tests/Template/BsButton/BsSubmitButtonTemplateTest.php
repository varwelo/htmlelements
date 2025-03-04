<?php


namespace HtmlElements\Tests\Template\BsButton;


use HtmlElements\Template\BsButton\BsSubmitButtonTemplate;
use PHPUnit\Framework\TestCase;

class BsSubmitButtonTemplateTest extends TestCase
{
    use \HtmlElements\Tests\Includes\tAccessToPrivate;

    private BsSubmitButtonTemplate $obj;

    protected function setUp(): void
    {
        $this->obj = new BsSubmitButtonTemplate();
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
        $submitButtonTag = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
        $this->obj->applyForButtonTag($submitButtonTag);
        $this->assertSame('<button type="submit" class="btn btn-primary">Submit</button>', $submitButtonTag->render());
    }
}
