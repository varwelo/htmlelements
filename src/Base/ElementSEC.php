<?php

namespace HtmlElements\Base;

class ElementSEC implements iStartTag, iContent, iEndTag
{   
    use tStartTag, tContent, tEndTag;

    public function render(): string
    {
        return $this->startTag() . $this->content . $this->endTag();
    }
}
