<?php

require __DIR__.'/../../core/start.php';

include HEADER;

echo '<h1>BsDivTextAlign and DivTag, Buttons</h1>'.PHP_EOL;



echo '<hr>'.PHP_EOL;

$submitButton = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
$resetButton = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
(new \HtmlElements\Template\BsButton\BsButtonTemplate())->applyForButtonTag($submitButton)->applyForButtonTag($resetButton);

$divTag = new \HtmlElements\Tag\Tag\DivTag();
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->applyForTag($divTag);

echo <<<EOL
{$divTag->startTag()}
  {$submitButton->render()}
  {$resetButton->render()}
{$divTag->endTag()}

EOL;



echo '<hr>'.PHP_EOL;

$buttonButton = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->applyForTag($buttonButton);


$divTag = new \HtmlElements\Tag\Tag\DivTag();
$divTag->setContent($buttonButton->render());
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->setAlignLeft()->applyForTag($divTag);
echo $divTag->render() .PHP_EOL;


$divTag = new \HtmlElements\Tag\Tag\DivTag();
$divTag->setContent($buttonButton->render());
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->setAlignCenter()->applyForTag($divTag);
echo $divTag->render() .PHP_EOL;


$divTag = new \HtmlElements\Tag\Tag\DivTag();
$divTag->setContent($buttonButton->render());
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->setAlignRight()->applyForTag($divTag);
echo $divTag->render() .PHP_EOL;



echo '<hr>'.PHP_EOL;

$submitButton = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();
$resetButton = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
$bsButtonTemplate = new \HtmlElements\Template\BsButton\BsButtonTemplate();
$bsButtonTemplate->setOutline(true);
$bsButtonTemplate->setStyle('success')->applyForButtonTag($submitButton);
$bsButtonTemplate->setStyle('danger')->applyForButtonTag($resetButton);

$divTag = new \HtmlElements\Tag\Tag\DivTag();
$divTag->setContent($submitButton->render().' '.$resetButton->render());
(new \HtmlElements\Template\TextAlign\BsTextAlignTemplate())->applyForTag($divTag);
echo $divTag->render();

include FOOTER;
