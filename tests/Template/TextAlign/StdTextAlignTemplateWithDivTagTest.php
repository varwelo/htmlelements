<?php

require_once __DIR__ . '/../../includes/tAccessToPrivate.php';


use HtmlElements\Tag\Tag\DivTag;
use HtmlElements\Template\TextAlign\StdTextAlignTemplate;
use PHPUnit\Framework\TestCase;

class StdTextAlignTemplateWithDivTagTest extends TestCase
{
    private StdTextAlignTemplate $stdTextAlignTemplate;

    private DivTag $divTag;

    protected function setUp(): void
    {
        $this->stdTextAlignTemplate = new StdTextAlignTemplate();
        $this->divTag = new DivTag();
    }

    protected function tearDown(): void
    {

    }

    public function testApplyForTagAfterConstruct()
    {
        $this->stdTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div style="text-align: center;"></div>', $this->divTag->render());
    }

    public function testApplyForTagAfterSetAlignLeft()
    {
        $this->stdTextAlignTemplate->setAlignLeft();
        $this->stdTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div style="text-align: left;"></div>', $this->divTag->render());
    }

    public function testApplyForTagAfterSetAlignCenter()
    {
        $this->stdTextAlignTemplate->setAlignCenter();
        $this->stdTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div style="text-align: center;"></div>', $this->divTag->render());
    }

    public function testApplyForTagAfterSetAlignRight()
    {
        $this->stdTextAlignTemplate->setAlignRight();
        $this->stdTextAlignTemplate->applyForTag($this->divTag);
        $this->assertSame('<div style="text-align: right;"></div>', $this->divTag->render());
    }
}
