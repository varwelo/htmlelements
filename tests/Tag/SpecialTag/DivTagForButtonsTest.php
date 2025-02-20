<?php

use PHPUnit\Framework\TestCase;

class DivTagForButtonsTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderAfterConstruct()
    {
        $this->assertSame('<div>'.PHP_EOL.'</div>'.PHP_EOL, $this->obj->render());
    }

    public function testRenderAfterAddButton()
    {
        $button = new \HtmlElements\Tag\Tag\ButtonTag();
        $button->setContent('button');

        $this->obj->addButton($button);

        $expected = <<<EOL
<div>
  <button>button</button>
</div>

EOL;
        $this->assertSame($expected, $this->obj->render());
    }

    public function testRenderAfterAddButtonThreeTimes() {
        $button1 = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
        $button2 = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
        $button3 = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();

        $this->obj->addButton($button1)->addButton($button2)->addButton($button3);

        $expected = <<<EOL
<div>
  <button type="button">Button</button>
  <button type="reset">Reset</button>
  <button type="submit">Submit</button>
</div>

EOL;
        $this->assertSame($expected, $this->obj->render());
    }

    public function testAddButtonThrowException()
    {
        $this->expectException(TypeError::class);
        $invalidObject = new class {};
        $this->obj->addButton($invalidObject);
    }
}
