<?php

require __DIR__.'/../../core/start.php';

include HEADER;

echo '<h1>BsDivTextAlign and DivTagForButtons</h1>'.PHP_EOL;



echo '<hr>'.PHP_EOL;

$submitButton = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
$resetButton = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
(new \HtmlElements\Template\BsButton\BsButtonTemplate())->applyForButtonTag($submitButton)->applyForButtonTag($resetButton);

$divTagForButtons = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->applyForTag($divTagForButtons);

$divTagForButtons->addButton($submitButton)->addButton($resetButton);
echo $divTagForButtons->render();



echo '<hr>'.PHP_EOL;

$buttonButton = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
(new \HtmlElements\Template\BsButton\BsButtonButtonTemplate())->applyForButtonTag($buttonButton);


$divTagForButtons = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
$divTagForButtons->addButton($buttonButton);
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->setAlignLeft()->applyForTag($divTagForButtons);
echo $divTagForButtons->render() .PHP_EOL;


$divTagForButtons = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
$divTagForButtons->addButton($buttonButton);
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->setAlignCenter()->applyForTag($divTagForButtons);
echo $divTagForButtons->render() .PHP_EOL;


$divTagForButtons = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
$divTagForButtons->addButton($buttonButton);
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->setAlignRight()->applyForTag($divTagForButtons);
echo $divTagForButtons->render() .PHP_EOL;



echo '<hr>'.PHP_EOL;

$submitButton = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
$resetButton = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();

$divTagForButtons = new \HtmlElements\Tag\SpecialTag\DivTagForButtons();
$divTagForButtons->addButton($submitButton)->addButton($resetButton);

$bsButtonTemplate = new \HtmlElements\Template\BsButton\BsButtonTemplate();
$bsButtonTemplate->setOutline(true);
$bsButtonTemplate->setStyle('success')->applyForButtonTag($submitButton);
$bsButtonTemplate->setStyle('danger')->applyForButtonTag($resetButton);

(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->applyForTag($divTagForButtons);
echo $divTagForButtons->render();

include FOOTER;
