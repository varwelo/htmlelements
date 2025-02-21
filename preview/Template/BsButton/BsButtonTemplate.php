<?php

require __DIR__.'/../../core/start.php';

include HEADER;

echo '<h1>BsButtonTemplate</h1>'.PHP_EOL;



echo '<hr>'.PHP_EOL;

$button = (new HtmlElements\Tag\Tag\ButtonTag())->setContent('Button');
(new \HtmlElements\Template\BsButton\BsButtonTemplate())->applyForButtonTag($button);
echo <<<EOL
ButtonTag:
{$button->render()}

EOL;



echo '<hr>'.PHP_EOL;

$buttonButton = new \HtmlElements\Tag\TagPlus\Button\ButtonButtonTag();
$resetButton = new \HtmlElements\Tag\TagPlus\Button\ResetButtonTag();
$submitButton = new \HtmlElements\Tag\TagPlus\Button\SubmitButtonTag();

(new \HtmlElements\Template\BsButton\BsButtonButtonTemplate())->applyForButtonTag($buttonButton);
(new \HtmlElements\Template\BsButton\BsResetButtonTemplate())->applyForButtonTag($resetButton);
(new \HtmlElements\Template\BsButton\BsSubmitButtonTemplate())->applyForButtonTag($submitButton);

echo <<<EOL
ButtonButtonTag, ResetButtonTag, SubmitButtonTag:
{$buttonButton->render()}
{$resetButton->render()}
{$submitButton->render()}

EOL;



echo '<hr>'.PHP_EOL;

$button1 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('sm');
$button2 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('normal');
$button3 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('lg');

$bsButtonTemplate = new \HtmlElements\Template\BsButton\BsButtonTemplate();
$bsButtonTemplate->setSize('sm')->applyForButtonTag($button1);
$bsButtonTemplate->setSize('normal')->applyForButtonTag($button2);
$bsButtonTemplate->setSize('lg')->applyForButtonTag($button3);

echo <<<EOL
setSize():
{$button1->render()}
{$button2->render()}
{$button3->render()}

EOL;



echo '<hr>'.PHP_EOL;

$button1 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Primary');
$button2 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Secondary');
$button3 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Success');
$button4 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Danger');
$button5 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Warning');
$button6 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Info');
$button7 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Light');
$button8 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Dark');

$bsButtonTemplate = new \HtmlElements\Template\BsButton\BsButtonTemplate();
$bsButtonTemplate->setStyle('primary')->applyForButtonTag($button1);
$bsButtonTemplate->setStyle('secondary')->applyForButtonTag($button2);
$bsButtonTemplate->setStyle('success')->applyForButtonTag($button3);
$bsButtonTemplate->setStyle('danger')->applyForButtonTag($button4);
$bsButtonTemplate->setStyle('warning')->applyForButtonTag($button5);
$bsButtonTemplate->setStyle('info')->applyForButtonTag($button6);
$bsButtonTemplate->setStyle('light')->applyForButtonTag($button7);
$bsButtonTemplate->setStyle('dark')->applyForButtonTag($button8);

echo <<<EOL
setStyle():
{$button1->render()}
{$button2->render()}
{$button3->render()}
{$button4->render()}
{$button5->render()}
{$button6->render()}
{$button7->render()}
{$button8->render()}

EOL;



echo '<hr>'.PHP_EOL;

$button1 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Primary');
$button2 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Secondary');
$button3 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Success');
$button4 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Danger');
$button5 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Warning');
$button6 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Info');
$button7 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Light');
$button8 = (new \HtmlElements\Tag\Tag\ButtonTag())->setContent('Dark');

$bsButtonTemplate = new \HtmlElements\Template\BsButton\BsButtonTemplate();
$bsButtonTemplate->setStyle('primary')->setOutline(true)->applyForButtonTag($button1);
$bsButtonTemplate->setStyle('secondary')->setOutline(true)->applyForButtonTag($button2);
$bsButtonTemplate->setStyle('success')->setOutline(true)->applyForButtonTag($button3);
$bsButtonTemplate->setStyle('danger')->setOutline(true)->applyForButtonTag($button4);
$bsButtonTemplate->setStyle('warning')->setOutline(true)->applyForButtonTag($button5);
$bsButtonTemplate->setStyle('info')->setOutline(true)->applyForButtonTag($button6);
$bsButtonTemplate->setStyle('light')->setOutline(true)->applyForButtonTag($button7);
$bsButtonTemplate->setStyle('dark')->setOutline(true)->applyForButtonTag($button8);

echo <<<EOL
setStyle() and setOutline():
{$button1->render()}
{$button2->render()}
{$button3->render()}
{$button4->render()}
{$button5->render()}
{$button6->render()}
{$button7->render()}
{$button8->render()}

EOL;



include FOOTER;
