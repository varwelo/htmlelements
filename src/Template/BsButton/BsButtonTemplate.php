<?php


namespace HtmlElements\Template\BsButton;



use HtmlElements\Exception\BsButtonTemplateException;
use HtmlElements\Tag\Tag\ButtonTag;

class BsButtonTemplate implements iBsButtonTemplate
{
    protected bool $outline = false;

    protected string $size = 'normal';

    protected string $style = 'primary';

    public function setOutline(bool $outline): self
    {
        $this->outline = $outline;
        return $this;
    }

    public function setSize(string $size): self
    {
        $availableValues = ['sm', 'normal', 'lg'];
        if (!in_array($size, $availableValues)) {
            throw new BsButtonTemplateException("Спроба встановити недоступне значення для size. Доступні: ".implode(', ', $availableValues));
        }

        $this->size = $size;
        return $this;
    }

    public function setStyle(string $style): self
    {
        $availableValues = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];
        if (!in_array($style, $availableValues)) {
            throw new BsButtonTemplateException("Спроба встановити недоступне значення для style. Доступні: ".implode(', ', $availableValues));
        }

        $this->style = $style;
        return $this;
    }

    public function applyForButtonTag(ButtonTag $buttonTag): self
    {
        $class = 'btn-';
        if ($this->outline) {
            $class .= 'outline-';
        }
        $class .= $this->style;
        $buttonTag->addClass('btn')->addClass($class);

        if ($this->size !== 'normal') {
            $buttonTag->addClass('btn-'.$this->size);
        }

        return $this;
    }
}
