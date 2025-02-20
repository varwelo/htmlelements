<?php

require_once __DIR__ . '/../../includes/tAccessToPrivate.php';


use HtmlElements\Template\BsButton\BsResetButtonTemplate;
use PHPUnit\Framework\TestCase;

class BsResetButtonTemplateTest extends TestCase
{
    use tAccessToPrivate;

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
