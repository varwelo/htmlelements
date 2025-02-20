<?php

namespace HtmlElements\Base;

class ElementSE extends BaseElementS
{   
    public function endTag(): string
    {
        return "</{$this->name}>";
    }

    // The render() function is not used
}
