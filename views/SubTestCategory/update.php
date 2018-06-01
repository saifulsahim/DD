<?php
require_once ("../../vendor/autoload.php");

$objSubTestCategory= new App\SubTestCategory\SubTestCategory();

$objSubTestCategory->setData($_POST);

$objSubTestCategory->update();

\App\Utility\Utility::redirect("../../admin/admin_master.php?page=manage_sub_test_category");