<?php
require_once ("../vendor/autoload.php");
//
//use App\Message\Message;
//
//$msg = Message::message();
//
//echo "<div>  <div id='message'>  $msg </div>   </div>";


$obj= new \App\Doctors\Doctors();
$obj->setData($_GET);
$singleData= $obj->view();

?>

<div class="col-md-8">
<h1>Single Record information- Doctors</h1>
<table class="table table-bordered table-striped">

    <?php



    echo "
   
   
    <tr>

        <th>ID</th>     <td>$singleData->id </td>

    </tr>
    
     <tr>

        <th>Name</th>     <td>$singleData->doctor_name </td>

    </tr>
    
     <tr>

        <th>Mobile</th>     <td>$singleData->mobile_no </td>

    </tr>
    
      <tr>

        <th>Designation</th>     <td>$singleData->designation</td>

    </tr>
    
      <tr>

        <th>Joining Date</th>     <td>$singleData->join_date </td>

    </tr>
   
      
    ";// end of echo



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


