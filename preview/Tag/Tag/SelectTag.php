<?php

require __DIR__ . '/../../core/start.php';

echo '<h1>InputTag</h1>'.PHP_EOL;

echo '<hr>'.PHP_EOL;

$select = (new \HtmlElements\Tag\Tag\SelectTag())->setAttr('name', 'list')
    ->add( (new \HtmlElements\Tag\Tag\OptionTag())->setContent('item1') )
    ->add( (new \HtmlElements\Tag\Tag\OptionTag())->setContent('item2')->setSelected() )
    ->add( (new \HtmlElements\Tag\Tag\OptionTag())->setContent('item3') );
echo '<p>'.$select->render().'</p>'.PHP_EOL;
