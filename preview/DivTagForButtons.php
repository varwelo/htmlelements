<?php

require $_SERVER['DOCUMENT_ROOT'] . '/preview/core/start.php';

echo '<h1>DivTagForButtons</h1>';

echo '<hr>'.PHP_EOL;

$button1 = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
$button2 = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
$button3 = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();

$buttonsDiv = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
$buttonsDiv->addButton($button1)->addButton($button2)->addButton($button3);

echo $buttonsDiv->render();
