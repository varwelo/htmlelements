<?php

namespace HtmlElements\Base;

class ElementS extends BaseElementS
{   
    public function render(): string
    {
        return $this->startTag();
    }
}
