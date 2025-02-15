<?php


namespace HtmlElements\Button;


class ResetButtonTag extends ButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setContent('Reset')->setAttr('type', 'reset');
    }
}
