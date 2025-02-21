<?php


namespace HtmlElements\Template\TextAlign;


use HtmlElements\Tag\Base\iTagAttrs;

class BsTextAlignTemplate extends BaseTextAlignTemplate
{
    public function applyForTag(iTagAttrs $tag): self
    {
        $classes = ['left' => 'text-start', 'center' => 'text-center', 'right' => 'text-end'];
        $tag->addClass($classes[$this->align]);
        return $this;
    }
}
