<?php

use PHPUnit\Framework\TestCase;

class tEndTagTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new class ('textarea') { use \HtmlElements\Base\tStartTag; use \HtmlElements\Base\tEndTag; };
    }

    protected function tearDown(): void
    {

    }

    public function testEndTag()
    {
        $this->assertSame('</textarea>', $this->obj->endTag());
    }
}

