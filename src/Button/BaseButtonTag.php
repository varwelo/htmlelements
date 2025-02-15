<?php


namespace HtmlElements\Button;

use HtmlElements\Base;

abstract class BaseButtonTag extends Base\ElementSEC
{
    public function __construct()
    {
        parent::__construct('button');
    }
}