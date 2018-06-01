<?php

//$path=$_SERVER['HTTP_REFERER'];


require_once ("../vendor/autoload.php");



$obj = new \App\Expenses\Expenses();

$obj->setData($_GET);

$obj->delete();

header('Location: admin_master.php?page=manage_expense_category');

?>
