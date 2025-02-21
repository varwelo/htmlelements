<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>ButtonTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;

$textarea = new \HtmlElements\Tag\Tag\ButtonTag();
$textarea->setContent('button');
echo '<p>'.$textarea->render().'</p>'.PHP_EOL;
