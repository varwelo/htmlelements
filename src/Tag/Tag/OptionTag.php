<?php

namespace HtmlElements\Tag\Tag;

class OptionTag extends \HtmlElements\Tag\Base\SECTag
{   
    public function __construct()
    {
        parent::__construct('option');
    }

    public function setSelected()
    {
        $this->setAttr('selected');
        return $this;
    }
}
