<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>ATag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;

$a = new \HtmlElements\Tag\Tag\ATag();
$a->setContent('a');
$a->setAttr('href', '#');
echo '<p>'.$a->render().'</p>'.PHP_EOL;
