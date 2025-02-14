<?php

namespace HtmlElements;

class OptionTag extends Base\ElementSEC
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
