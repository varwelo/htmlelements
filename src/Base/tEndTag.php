<?php

namespace HtmlElements\Base;

trait tEndTag
{
    public function endTag(): string
    {
        return "</{$this->name}>";
    }
}
