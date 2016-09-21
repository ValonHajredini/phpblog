<?php
foreach (scandir(dirname(__FILE__).'/vendor/html/') as $filename) {
    $except = array("inc", "php");
    $imp = implode('|', $except);
    if (preg_match('/^.*\.(' . $imp . ')$/i', $filename)) {
        $file = '/vendor/html/' . $filename;
        include $file;
        echo $file;
        echo '<br>';

    }

}


class index extends htmlForms{

}
$form = new htmlForms();
$form->Form(['method'=>'get','action'=>'form.php','class' => '']);
    $form->textField('firstname','cls_form','first name');
    $form->textField('lastname','cls_form',null,['onclick'=>'alert("Hello world")','placeholder' =>'Lastname']);
    $form->textField('ilir','cls_clas',null,['data-target' => 'from data target','data' => 'df we'],'id');
    $form->emailField('email','cls_email','email@email.com',[],'new_id');
    $form->passwordField('password','cls_password',null,['palaceholder'=>'new password']);
    $form->submitField(['name'=>'submit','value'=>'Save']);
$form->endForm();
$b = new Bootstrap();
    $b->bootstrap();
$i = new Iliri();
$i->iliri();
$e = new  endrit();
echo '<br>';
$e->endri();