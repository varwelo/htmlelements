<?php

namespace HtmlElements\Base;

class ElementS implements iStartTag
{   
    use tStartTag;

    public function render(): string
    {
        return $this->startTag();
    }
}
