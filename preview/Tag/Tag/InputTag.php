<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>InputTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;

$input = new \HtmlElements\Tag\Tag\InputTag();
$input->setAttr('value', 'Value');
echo '<p>'.$input->render().'</p>'.PHP_EOL;

$inputDate = new \HtmlElements\Tag\Tag\InputTag();
$inputDate->setAttr('type', 'date');
echo '<p>'.$inputDate->render().'</p>'.PHP_EOL;

$inputCheckbox = new \HtmlElements\Tag\Tag\InputTag();
$inputCheckbox->setAttr('type', 'checkbox');
echo '<p>'.$inputCheckbox->render().'</p>'.PHP_EOL;
