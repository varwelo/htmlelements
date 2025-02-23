<?php

require __DIR__ . '/../../../core/start.php';

echo '<h1>SubmitButtonTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'SubmitButtonTag: ';
$submit = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
echo $submit->render() .PHP_EOL;
