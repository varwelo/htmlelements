<?php

namespace HtmlElements\Base;

trait tTagAttrs
{
    private array $attrs = [];

    
    /* --- Робота з атрибутами (та атрибутом class) BEGIN --- */
    public function getAttr(string $name)
    {
        if (isset($this->attrs[$name])) {
            return $this->attrs[$name];
        } else {
            return null;
        }
    }


    public function setAttr(string $name, $value = true): self
    {
        $this->attrs[$name] = $value;
        return $this;
    }


    public function setAttrs(array $attrs): self
    {
        foreach ($attrs as $name => $value) {
            $this->attrs[$name] = $value;
        }

        return $this;
    }


    public function removeAttr(string $name): self
    {
        unset($this->attrs[$name]);
        return $this;
    }


    public function addClass(string $className): self
    {
        if (isset($this->attrs['class'])) {
            $classNames = explode(' ', $this->attrs['class']);

            if (!in_array($className, $classNames)) {
                $classNames[] = $className;
                $this->attrs['class'] = implode(' ', $classNames);
            }
        } else {
            $this->attrs['class'] = $className;
        }

        return $this;
    }


    public function removeClass(string $className): self
    {
        if (isset($this->attrs['class'])) {
            $classNames = explode(' ', $this->attrs['class']);
            
            $key = array_search($className, $classNames);
            if ($key !== false) {
                unset($classNames[$key]);

                if ($classNames !== []) {
                    $this->attrs['class'] = implode(' ', $classNames);
                } else {
                    $this->removeAttr('class');
                }
            }
        }
        
        return $this;
    }


    private function getAttrsStr(): string
    {
        if ($this->attrs === []) {
            return '';
        }

        $result = '';
        foreach ($this->attrs as $name => $value) {
            if ($value === true) {
                $result .= ' '.$name;
            } else {
                $result .= " {$name}=\"{$value}\"";
            }
        }
        
        return $result;
    }
    /* --- Робота з атрибутами (та атрибутом class) END-- --- */
}
