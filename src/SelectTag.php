<?php

namespace HtmlElements;

class SelectTag extends Base\ElementSESpecialC
{   
    private array $options = [];

    public function __construct()
    {
        parent::__construct('select');
    }

    public function __toString(): string
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
            $result .= $option;
        }

        return $result;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}