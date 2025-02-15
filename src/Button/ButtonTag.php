<?php

namespace HtmlElements\Button;

use HtmlElements\Base;

class ButtonTag extends BaseButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setContent('Button')->setAttr('type', 'button');
    }
}
