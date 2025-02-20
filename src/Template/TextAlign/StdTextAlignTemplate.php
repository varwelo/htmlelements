<?php


namespace HtmlElements\Template\TextAlign;


use HtmlElements\Tag\Base\iTagAttrs;

class StdTextAlignTemplate extends BaseTextAlignTemplate
{
    public function applyForTag(iTagAttrs $tag): self
    {
        $styles = ['left' => 'text-align: left;', 'center' => 'text-align: center;', 'right' => 'text-align: right;'];
        $tag->setAttr('style', $styles[$this->align]);
        return $this;
    }
}
