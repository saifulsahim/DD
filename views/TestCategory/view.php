<?php
require_once ("../vendor/autoload.php");



$obj = new App\TestCategory\TestCategory();

$obj->setData($_GET);

$singleData= $obj->view();
?>



<div class="col-md-8">
<h1>  Single Record Information- Test Category</h1>
<table class="table table-bordered table-striped">

 <?php

    echo "
    
    <tr>

        <th>ID</th>     <td>$singleData->id </td>

    </tr>

    <tr>

        <th>Name</th>     <td>$singleData->name </td>

    </tr>

    ";
?>


</table>
</div>
<script src="../../resource/bootstrap/js/jquery.js"></script>

<script>


    jQuery(
        function ($) {
            $('#message').fadeOut(550);
            $('#message').fadeIn(550);
            $('#message').fadeOut(550);
            $('#message').fadeIn(550);
            $('#message').fadeOut(550);
            $('#message').fadeIn(550);
            $('#message').fadeOut(550);
        }
    )
</script>

