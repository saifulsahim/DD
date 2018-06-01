<?php
require_once ("../vendor/autoload.php");



$obj = new App\TestCategory\TestCategory();

$obj->setData($_GET);

$obj->trash();

 \App\Utility\Utility::redirect("../../admin/admin_master.php?page=trashed_category");
?>

