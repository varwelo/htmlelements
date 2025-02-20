<?php

namespace HtmlElements\Base;

class SETag extends BaseSTag
{   
    public function endTag(): string
    {
        return "</{$this->name}>";
    }

    // The render() function is not used
}
