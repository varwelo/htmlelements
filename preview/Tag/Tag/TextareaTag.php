<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>InputTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;

$textarea = new \HtmlElements\Tag\Tag\TextareaTag();
$textarea->setAttr('placeholder', 'placeholder text');
echo '<p>'.$textarea->render().'</p>'.PHP_EOL;
