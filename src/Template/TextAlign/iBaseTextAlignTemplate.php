<?php

namespace HtmlElements\Template\TextAlign;

use \HtmlElements\Tag\Base\iTagAttrs;

interface iBaseTextAlignTemplate
{
    public function setAlignLeft(): self;

    public function setAlignCenter(): self;

    public function setAlignRight(): self;

    public function applyForTag(iTagAttrs $tag): self;
}
