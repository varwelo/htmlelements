<?php


namespace HtmlElements\Tests\Template\TextAlign;


use HtmlElements\Tag\Tag\DivTag;
use HtmlElements\Template\TextAlign\BsTextAlignTemplate;
use PHPUnit\Framework\TestCase;

class BsTextAlignTemplateWithDivTagTest extends TestCase
{
    private BsTextAlignTemplate $bsTextAlignTemplate;

    private DivTag $divTag;

    protected function setUp(): void
    {
        $this->bsTextAlignTemplate = new BsTextAlignTemplate();
        $this->divTag = new DivTag();
    }

    protected function tearDown(): void
    {

    }

    public function testApplyForTagAfterConstruct()
    {
        $this->bsTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div class="text-center"></div>', $this->divTag->render());
    }

    public function testApplyForTagAfterSetAlignLeft()
    {
        $this->bsTextAlignTemplate->setAlignLeft();
        $this->bsTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div class="text-start"></div>', $this->divTag->render());
    }

    public function testApplyForTagAfterSetAlignCenter()
    {
        $this->bsTextAlignTemplate->setAlignCenter();
        $this->bsTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div class="text-center"></div>', $this->divTag->render());
    }

    public function testApplyForTagAfterSetAlignRight()
    {
        $this->bsTextAlignTemplate->setAlignRight();
        $this->bsTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div class="text-end"></div>', $this->divTag->render());
    }
}
