<?php

require $_SERVER['DOCUMENT_ROOT'] . '/preview/core/start.php';

include HEADER;
?>

<h1>HtmlElements - Bootstrap</h1>

<p><strong>За допомогою HTML</strong></p>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
        Default checkbox
    </label>
</div>

<button type="button" class="btn btn-primary">Primary</button>

<hr>

<strong>За допомогою HtmlElements</strong>

<?php
$div = (new \HtmlElements\Base\ElementSEC('div'))
    ->addClass('form-check');

$input = (new \HtmlElements\InputTag())
    ->addClass('form-check-input')
    ->setAttr('type', 'checkbox')
    ->setAttr('value', '')
    ->setAttr('id', 'flexCheckDefault');

$label = (new \HtmlElements\LabelTag)
    ->addClass('form-check-label')
    ->setAttr('for', 'flexCheckDefault')
    ->setContent('Default checkbox');

$button = (new \HtmlElements\Base\ElementSEC('button'))
    ->setAttr('type', 'button')
    ->addClass('btn btn-primary')
    ->setContent('Primary');


echo $div->startTag() .PHP_EOL;
echo $input .PHP_EOL;
echo $label .PHP_EOL;
echo $div->endTag() .PHP_EOL;
echo $button;



include FOOTER;
