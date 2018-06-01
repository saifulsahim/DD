<?php

require_once ("../vendor/autoload.php");

$obj = new \App\SubTestCategory\SubTestCategory();

$obj->setData($_GET);

$obj->delete();
//ob_start();
//\App\Utility\Utility::redirect("../../admin/admin_master.php?page=manage_sub_test_category");
header('Location: admin_master.php?page=manage_sub_test_category');
?>

