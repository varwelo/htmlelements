<?php

require __DIR__.'/../../core/start.php';

include HEADER;
echo '<h1>BsButtonTemplate setSize() Error</h1>';

echo '<hr>'.PHP_EOL;

$bsButtonTemplate = (new \HtmlElements\Template\BsButton\BsButtonTemplate())->setSize('invalid_size');

include FOOTER;
