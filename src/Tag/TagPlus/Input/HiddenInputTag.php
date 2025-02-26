<?php


namespace HtmlElements\Tag\TagPlus\Input;


class HiddenInputTag extends \HtmlElements\Tag\Tag\InputTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setAttr('type', 'hidden');
    }
}
