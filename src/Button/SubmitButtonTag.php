<?php


namespace HtmlElements\Button;


class SubmitButtonTag extends BaseButtonTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setContent('Submit')->setAttr('type', 'submit');
    }
}
