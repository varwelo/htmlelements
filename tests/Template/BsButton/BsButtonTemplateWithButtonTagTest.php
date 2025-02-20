<?php

require_once __DIR__ . '/../../includes/tAccessToPrivate.php';


use HtmlElements\Tag\Tag\ButtonTag;
use HtmlElements\Template\BsButton\BsButtonTemplate;
use PHPUnit\Framework\TestCase;

class BsButtonTemplateWithButtonTagTest extends TestCase
{
    use tAccessToPrivate;

    private BsButtonTemplate $bsButtonTemplate;

    private ButtonTag $buttonTag;

    protected function setUp(): void
    {
        $this->bsButtonTemplate = new BsButtonTemplate();
        $this->buttonTag = new ButtonTag();
    }

    protected function tearDown(): void
    {

    }

    public function testApplyForButtonTagAfterConstruct()
    {
        $this->bsButtonTemplate->applyForButtonTag($this->buttonTag);
        $this->assertSame('<button class="btn btn-primary"></button>', $this->buttonTag->render());
    }

    public function testSetSizeAndApplyForButtonTag()
    {
        $this->bsButtonTemplate->setSize('sm');
        $this->bsButtonTemplate->applyForButtonTag($this->buttonTag);
        $this->assertSame('<button class="btn btn-primary btn-sm"></button>', $this->buttonTag->render());
    }

    public function testSetStyleAndApplyForButtonTag()
    {
        $this->bsButtonTemplate->setStyle('info');
        $this->bsButtonTemplate->applyForButtonTag($this->buttonTag);
        $this->assertSame('<button class="btn btn-info"></button>', $this->buttonTag->render());
    }

    public function testSetOutlineAndAndApplyForButtonTag()
    {
        $this->bsButtonTemplate->setOutline(true);
        $this->bsButtonTemplate->applyForButtonTag($this->buttonTag);
        $this->assertSame('<button class="btn btn-outline-primary"></button>', $this->buttonTag->render());
    }
}
