<?php


namespace HtmlElements\Tests\Tag\Tag;


use PHPUnit\Framework\TestCase;

class FormSETagTest extends TestCase
{
    use \HtmlElements\Tests\Includes\tAccessToPrivate;

    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\Tag\FormSETag();
    }

    protected function tearDown(): void
    {

    }

    public function testRenderNotExists()
    {
        $this->expectException(\Error::class);
        $this->expectExceptionMessage('Call to undefined method HtmlElements\Tag\Tag\FormSETag::render()');
        $this->obj->render();
    }

    public function testStartEndTagAfterConstruct()
    {
        $this->assertSame('<form></form>', $this->obj->startTag().$this->obj->endTag());
    }

    public function testAfterSetMethodGet()
    {
        $this->obj->setMethodGet();
        $this->assertSame('get', $this->obj->getAttr('method'));
        $this->assertSame('<form method="get"></form>', $this->obj->startTag().$this->obj->endTag());
    }

    public function testStartEndTagAfterSetMethodPost()
    {
        $this->obj->setMethodPost();
        $this->assertSame('post', $this->obj->getAttr('method'));
        $this->assertSame('<form method="post"></form>', $this->obj->startTag().$this->obj->endTag());
    }

    public function testStartEndTagAfterSetAction()
    {
        $this->obj->setAction('action.php');
        $this->assertSame('action.php', $this->obj->getAttr('action'));
        $this->assertSame('<form action="action.php"></form>', $this->obj->startTag().$this->obj->endTag());
    }
}
