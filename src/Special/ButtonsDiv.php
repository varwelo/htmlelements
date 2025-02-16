<?php

namespace HtmlElements\Special;

use HtmlElements\Base;
use HtmlElements\Button\ButtonTag;

class ButtonsDiv extends Base\ElementSESpecialC
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
