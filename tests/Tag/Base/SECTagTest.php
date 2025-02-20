<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../includes/tAccessToPrivate.php';

class SECTagTest extends TestCase
{
    use tAccessToPrivate;

    private $obj;

    protected function setUp(): void
    {
        $this->obj = new \HtmlElements\Tag\Base\SECTag('textarea');
    }

    protected function tearDown(): void
    {

    }

    /* [-- Content --- */
    public function testContentOnDefault()
    {
        $this->setAccessToPrivateProperty($this->obj,'content');
        $this->assertSame('', $this->privateProperty->getValue($this->obj));
    }

    public function testGetContentIfContentOnDefault()
    {
        $this->assertSame('', $this->obj->getContent());
    }


    /**
     * @dataProvider setContentProvider
     */
    public function testSetContent($setValue, $getValue)
    {
        $this->setAccessToPrivateProperty($this->obj,'content');
        $this->obj->setContent($setValue);
        $this->assertSame($getValue, $this->privateProperty->getValue($this->obj));
    }


    /**
     * @dataProvider setContentProvider
     */
    public function testGetContentAfterSetContent($setValue, $getValue)
    {
        $this->setAccessToPrivateProperty($this->obj,'content');
        $this->obj->setContent($setValue);
        $this->assertSame($getValue, $this->obj->getContent());
    }

    public function setContentProvider() {
        return [
            'str' => ['abc', 'abc'],
            'int' => [5, '5'],
            'float' => [5.1, '5.1'],
            'bool_false' => [false, ''],
            'bool_true' => [true, '1'],
        ];
    }


    /**
     * @dataProvider setContentWithTypeErrorProvider
     */
    public function testSetContentWithTypeError($value)
    {
        $this->expectException(TypeError::class);
        $this->obj->setContent($value);
    }

    public function setContentWithTypeErrorProvider() {
        return [
            'null' => [null],
            'array' => [[]],
        ];
    }
    /* ]-- Content --- */


    public function testRender()
    {
        $this->obj->setContent('text');
        $this->assertSame('<textarea>text</textarea>', $this->obj->render());
    }
}
