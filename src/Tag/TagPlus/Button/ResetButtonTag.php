<?php

namespace HtmlElements\Tag\TagPlus\Button;

class ResetButtonTag extends \HtmlElements\Tag\Tag\ButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setContent('Reset')->setAttr('type', 'reset');
    }
}
