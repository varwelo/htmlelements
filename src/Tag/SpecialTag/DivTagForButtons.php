<?php

namespace HtmlElements\Tag\SpecialTag;

use HtmlElements\Tag\Tag\ButtonTag;

class DivTagForButtons extends \HtmlElements\Tag\Base\SESpecialCTag
{
    /**
     * @var ButtonTag[]
     */
    private array $buttons = [];

    public function __construct()
    {
        parent::__construct('div');
    }

    public function addButton(ButtonTag $buttonTag): self
    {
        $this->buttons[] = $buttonTag;
        return $this;
    }

    public function render(): string
    {
        $result = $this->startTag() .PHP_EOL;

        foreach ($this->buttons as $buttonTag) {
            $result .= '  '.$buttonTag->render().PHP_EOL;
        }

        return $result . $this->endTag() .PHP_EOL;
    }
}
