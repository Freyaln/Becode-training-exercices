<?php

require 'form.php';

$form = new Form(array(
    'username' => 'Abs0lut'
));

echo $form->entryForm();
echo $form->input('username');
echo $form->select();
echo $form->textArea();
echo $form->radioBtn();
echo $form->checkbox();
echo $form->submit();
echo $form->endForm();
