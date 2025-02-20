<?php


namespace HtmlElements\Template\BsButton;


use HtmlElements\Tag\Tag\ButtonTag;

interface iBsButtonTemplate
{
    public function setOutline(bool $outline): self;

    public function setSize(string $size): self;

    public function setStyle(string $style): self;

    public function applyForButtonTag(ButtonTag $buttonTag): self;
}
