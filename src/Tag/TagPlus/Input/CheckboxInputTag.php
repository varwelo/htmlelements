<?php

namespace HtmlElements\Tag\TagPlus\Input;

class CheckboxInputTag extends \HtmlElements\Tag\Tag\InputTag
{
    public function __construct()
    {
        parent::__construct();
        $this->setAttrs(['type' => 'checkbox', 'value' => '1']);
    }

    public function render(): string
    {
        $name = $this->getAttr('name');

        if ($name !== null) {
            $hidden = new HiddenInputTag();
            $hidden->setAttrs(['value' => '0', 'name' => $name]);

            return $hidden->render().parent::render();
        } else {
            return parent::render();
        }
    }
}
