<?php
require_once ("vendor/autoload.php");
session_start();
if(session_destroy())
{
   \App\Utility\Utility::redirect("admin/admin_master.php");
}
?>