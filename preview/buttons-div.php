<?php

require $_SERVER['DOCUMENT_ROOT'] . '/preview/core/start.php';

echo '<h1>ButtonsDiv</h1>';

echo '<hr>'.PHP_EOL;

$button1 = new \HtmlElements\Button\ButtonButtonTag();
$button2 = new \HtmlElements\Button\ResetButtonTag();
$button3 = new \HtmlElements\Button\SubmitButtonTag();

$buttonsDiv = new \HtmlElements\Special\ButtonsDiv();
$buttonsDiv->addButton($button1)->addButton($button2)->addButton($button3);

echo $buttonsDiv->render();
