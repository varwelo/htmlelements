<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>Button</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'ButtonButtonTag: ';
$button = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
echo $button->render() .PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'ResetButtonTag: ';
$reset = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
echo $reset->render() .PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'SubmitButtonTag: ';
$submit = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
echo $submit->render() .PHP_EOL;
