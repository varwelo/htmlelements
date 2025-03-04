<?php


namespace HtmlElements\Tests\Includes;


trait tAccessToPrivate
{
    private $privateProperty;

    private $privateMethod;

    private function setAccessToPrivateProperty(object $obj, string $propertyName)
    {
        $reflectionClass = new \ReflectionClass($obj);
        $this->privateProperty = $reflectionClass->getProperty($propertyName);
        $this->privateProperty->setAccessible(true);
    }

    private function setAccessToPrivateMethod(object $obj, string $methodName)
    {
        $reflectionClass = new \ReflectionClass($obj);
        $this->privateMethod = $reflectionClass->getMethod($methodName);
        $this->privateMethod->setAccessible(true);
    }
}