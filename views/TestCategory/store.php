<?php
require_once ("../../vendor/autoload.php");

$objTestCategory = new \App\TestCategory\TestCategory();

$objTestCategory->setData($_POST);

$objTestCategory->store();

\App\Utility\Utility::redirect("../../admin/admin_master.php?page=manage_category");