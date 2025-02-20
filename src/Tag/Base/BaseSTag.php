<?php


namespace HtmlElements\Tag\Base;


abstract class BaseSTag implements iTagAttrs
{
    use tTagAttrs;

    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function startTag(): string
    {
        return "<{$this->name}{$this->getAttrsStr()}>";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
