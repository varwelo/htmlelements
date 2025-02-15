<?php

namespace HtmlElements\Button;

use HtmlElements\Base;

class ButtonTag extends Base\ElementSEC
{
    public function __construct()
    {
        parent::__construct('button');
        $this->setContent('Button');
    }
}
