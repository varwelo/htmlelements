<?php

namespace HtmlElements\Base;

class ElementS implements iStartTag
{   
    use tStartTag;

    public function __toString(): string
    {
        return $this->startTag();
    }
}