<?php

namespace HtmlElements\Button;

use HtmlElements\Base;

class ButtonButtonTag extends ButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setContent('Button')->setAttr('type', 'button');
    }
}
