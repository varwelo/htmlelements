<?php

namespace HtmlElements\Base;

class STag extends BaseSTag
{   
    public function render(): string
    {
        return $this->startTag();
    }
}
