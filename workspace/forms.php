<?php

require_once './workspace/models.php';
require_once './tuskweb_modules/formsModule.php';

$form1 = new ModelForms();
$form1->model = $db1;

$form2 = new Forms();
$form2->add("text", "text2", 0, 100, "Hi", "Placeholder");
$form2->add("number", "num2", 0, 100, 0, "0");

// $form1->output();

var_export($form1, true);
var_export($form2, true);
?>