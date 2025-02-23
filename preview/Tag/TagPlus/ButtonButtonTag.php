<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>ButtonButtonTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'ButtonButtonTag: ';
$button = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
echo $button->render() .PHP_EOL;
