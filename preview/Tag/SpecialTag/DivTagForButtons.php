<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>DivTagForButtons</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;

$buttonTag =new \HtmlElements\Tag\Tag\ButtonTag();
$buttonTag->setContent('button');

$button1 = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
$button2 = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
$button3 = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();

$buttonsDiv = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
$buttonsDiv->addButton($buttonTag)->addButton($button1)->addButton($button2)->addButton($button3);

echo $buttonsDiv->render();
