<?php

namespace HtmlElements\Base;

class SECTag extends SETag
{   
    private string $content = '';

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function render(): string
    {
        return $this->startTag() . $this->content . $this->endTag();
    }
}
