<?php


namespace HtmlElements\Button;


class ResetButtonTag extends BaseButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setAttr('type', 'reset');
    }
}
