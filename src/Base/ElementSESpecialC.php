<?php

namespace HtmlElements\Base;

abstract class ElementSESpecialC implements iStartTag, iEndTag
{   
    use tStartTag, tEndTag;
    
    abstract public function render();
}
