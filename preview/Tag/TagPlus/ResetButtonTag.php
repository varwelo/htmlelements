<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>ResetButtonTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'ResetButtonTag: ';
$reset = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
echo $reset->render() .PHP_EOL;
