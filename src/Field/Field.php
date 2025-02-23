<?php

namespace HtmlElements\Field;

use HtmlElements\Tag\Base\tTagAttrs;

abstract class Field
{
    use tTagAttrs;

    public string $name;


    public string $label;

    public string $help;

    public string $error;

    protected string $value;

    abstract public function setValue();

    public function __construct(string $name)
    {
        $this->setAttr('name', $name);
    }
}
