<?php
require_once ("../vendor/autoload.php");

//$fromDate = $_POST['fromDate'];
//var_dump($_POST);
//\App\Utility\Utility::dd($fromDate);
//$toDate = $_POST['toDate'];



//$path=$_SERVER['HTTP_REFERER'];





$objCustomInvoice = new \App\CustomInvoice\CustomInvoice();

$objCustomInvoice->setData($_GET);

$objCustomInvoice->delete();

header('Location: admin_master.php?page=manage_custom_invoice');