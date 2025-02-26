<?php

require __DIR__ . '/../../../core/start.php';

echo '<h1>HiddenInputTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;
echo 'HiddenInputTag: ';
$hidden = new \HtmlElements\Tag\TagPlus\Input\HiddenInputTag();
echo $hidden->render() .PHP_EOL;
