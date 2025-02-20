<?php

namespace HtmlElements\Tag\TagPlus\Button;

class SubmitButtonTag extends \HtmlElements\Tag\Tag\ButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setContent('Submit')->setAttr('type', 'submit');
    }
}
