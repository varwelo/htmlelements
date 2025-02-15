<?php


namespace HtmlElements\Button;


class SubmitButtonTag extends BaseButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setAttr('type', 'submit');
    }
}
