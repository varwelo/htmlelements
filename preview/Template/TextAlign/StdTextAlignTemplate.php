<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>StdTextAlignTemplate</h1>' . PHP_EOL;

echo '<hr>' . PHP_EOL;

$stdTextAlignTemplate = new \HtmlElements\Template\TextAlign\StdTextAlignTemplate();

$divTag0 = new \HtmlElements\Tag\Tag\DivTag();
$divTag0->setContent('Текст0');
$stdTextAlignTemplate->applyForTag($divTag0);
echo $divTag0->render() . PHP_EOL;

echo '<hr>' . PHP_EOL;

$divTag1 = new \HtmlElements\Tag\Tag\DivTag();
$divTag1->setContent('Текст1');
$stdTextAlignTemplate->setAlignLeft()->applyForTag($divTag1);
echo $divTag1->render() . PHP_EOL;

$divTag2 = new \HtmlElements\Tag\Tag\DivTag();
$divTag2->setContent('Текст2');
$stdTextAlignTemplate->setAlignCenter()->applyForTag($divTag2);
echo $divTag2->render() . PHP_EOL;

$divTag3 = new \HtmlElements\Tag\Tag\DivTag();
$divTag3->setContent('Текст3');
$stdTextAlignTemplate->setAlignRight()->applyForTag($divTag3);
echo $divTag3->render() . PHP_EOL;
