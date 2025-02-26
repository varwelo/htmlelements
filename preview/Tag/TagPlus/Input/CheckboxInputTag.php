<?php

require __DIR__ . '/../../../core/start.php';

echo '<h1>CheckboxInputTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'HiddenInputTag: ';
$checkbox = new \HtmlElements\Tag\TagPlus\Input\CheckboxInputTag();
$checkbox->setAttr('name', 'foo');
echo $checkbox->render() .PHP_EOL;
