<?php

namespace HtmlElements\Base;

interface iTagAttrs
{
    public function startTag(): string;

    public function getName(): string;

    public function getAttr(string $name);

    public function setAttr(string $name, $value = true): self;

    public function setAttrs(array $attrs): self;

    public function removeAttr(string $name): self;

    public function addClass(string $className): self;

    public function removeClass(string $className): self;
}
