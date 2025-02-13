<?php

namespace HtmlElements\Base;

interface iContent
{
    public function setContent(string $content): self;

    public function getContent(): ?string;
}