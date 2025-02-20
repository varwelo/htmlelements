<?php

namespace HtmlElements\Tag\Tag;

use HtmlElements\Tag\Tag\OptionTag;

class SelectTag extends \HtmlElements\Tag\Base\SESpecialCTag
{
    /**
     * @var OptionTag[]
     */
    private array $options = [];

    public function __construct()
    {
        parent::__construct('select');
    }

    public function render(): string
    {       
        return $this->startTag().$this->getOptionsStr().$this->endTag();
    }

    public function add(OptionTag $option): SelectTag
    {
        $this->options[] = $option;
        return $this;
    }

    public function getOptionsStr(): string
    {
        $result = '';
        foreach ($this->options as $option) {
            $result .= $option->render();
        }

        return $result;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
