<?php

namespace HtmlElements\Tag\TagPlus\Button;

class ButtonButtonTag extends \HtmlElements\Tag\Tag\ButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setContent('Button')->setAttr('type', 'button');
    }
}
