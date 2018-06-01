<?php

//$path = $_SERVER['HTTP_REFERER'];
require_once("../vendor/autoload.php");





$objInvoice = new App\Invoice\Invoice();

$objInvoice->setData($_GET);

$objInvoice->delete($_GET['invoice_no']);


header('Location: admin_master.php?page=manage_invoice');

?>


