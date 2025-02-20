<?php


namespace HtmlElements\Template\TextAlign;


use HtmlElements\Tag\Base\iTagAttrs;

abstract class BaseTextAlignTemplate implements iBaseTextAlignTemplate
{
    protected string $align = 'center';

    public function setAlignLeft(): self
    {
        $this->align = 'left';
        return $this;
    }

    public function setAlignCenter(): self
    {
        $this->align = 'center';
        return $this;
    }

    public function setAlignRight(): self
    {
        $this->align = 'right';
        return $this;
    }

    abstract public function applyForTag(iTagAttrs $tag): self;
}
