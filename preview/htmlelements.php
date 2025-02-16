<?php

require $_SERVER['DOCUMENT_ROOT'] . '/preview/core/start.php';

echo '<h1>HtmlElements</h1>';

$input = (new \HtmlElements\InputTag())->setAttr('value', 'Value');
echo '<p>'.$input->render().'<p>';

$inputDate = (new \HtmlElements\InputTag())->setAttr('type', 'date');
echo '<p>'.$inputDate->render().'</p>';

$inputCheckbox = (new \HtmlElements\InputTag())->setAttr('type', 'checkbox');
echo '<p>'.$inputCheckbox->render().'</p>';

$textarea = new \HtmlElements\TextareaTag();
$textarea->setAttr('placeholder', 'placeholder text');
echo $textarea->render();

$select = (new \HtmlElements\SelectTag())->setAttr('name', 'list')
    ->add( (new \HtmlElements\OptionTag())->setContent('item1') )
    ->add( (new \HtmlElements\OptionTag())->setContent('item2')->setSelected() )
    ->add( (new \HtmlElements\OptionTag())->setContent('item3') );
echo '<p>'.$select->render().'</p>';
