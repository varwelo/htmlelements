<?php


namespace HtmlElements\Tag\Tag;


class FormSETag extends \HtmlElements\Tag\Base\SETag
{
    public function __construct()
    {
        parent::__construct('form');
    }

    public function setAction(string $url): self
    {
        $this->setAttr('action', $url);
        return $this;
    }

    public function setMethodPost(): self
    {
        $this->setAttr('method', 'post');
        return $this;
    }

    public function setMethodGet(): self
    {
        $this->setAttr('method', 'get');
        return $this;
    }
}
