<?php

require __DIR__.'/../../core/start.php';

include HEADER;
echo '<h1>BsButtonTemplate setStyle() Error</h1>';

echo '<hr>'.PHP_EOL;

$bsButtonTemplate = (new \HtmlElements\Template\BsButton\BsButtonTemplate())->setStyle('invalid_style');

include FOOTER;
