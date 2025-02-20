<?php

require $_SERVER['DOCUMENT_ROOT'] . '/preview/core/start.php';

echo '<h1>HtmlElements</h1>';

$input = (new \HtmlElements\Tag\Tag\InputTag())->setAttr('value', 'Value');
echo '<p>'.$input->render().'<p>';

$inputDate = (new \HtmlElements\Tag\Tag\InputTag())->setAttr('type', 'date');
echo '<p>'.$inputDate->render().'</p>';

$inputCheckbox = (new \HtmlElements\Tag\Tag\InputTag())->setAttr('type', 'checkbox');
echo '<p>'.$inputCheckbox->render().'</p>';

$textarea = new \HtmlElements\Tag\Tag\TextareaTag();
$textarea->setAttr('placeholder', 'placeholder text');
echo $textarea->render();

$select = (new \HtmlElements\Tag\Tag\SelectTag())->setAttr('name', 'list')
    ->add( (new \HtmlElements\Tag\Tag\OptionTag())->setContent('item1') )
    ->add( (new \HtmlElements\Tag\Tag\OptionTag())->setContent('item2')->setSelected() )
    ->add( (new \HtmlElements\Tag\Tag\OptionTag())->setContent('item3') );
echo '<p>'.$select->render().'</p>';
