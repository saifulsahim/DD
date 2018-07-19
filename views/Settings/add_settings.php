<?php

require_once("../vendor/autoload.php");
//if (!isset($_SESSION)) session_start();

//use App\Message\Message;
//
//$msg = Message::message();
//
//echo "<div>  <div id='message'>  $msg </div>   </div>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Company Information</title>

    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/formstyle.css">
    <style>
        body {
            background: antiquewhite;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-md-6">

    <h2 style="color: #442a8d;">Company Information Entry</h2>

    <form  action="store.php" method="post" enctype="multipart/form-data">



        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter name">
        </div>


        <div class="form-group">
            <label>E-mail:</label>
            <input type="email" name="email" class="form-control"  placeholder="Enter mail">
        </div>


        <strong> Address: </strong>
        <textarea rows="2" class="form-control" name="address"></textarea>
        <br>

<!--        <strong> E-mail: </strong>-->
<!--        <input type="email" name="email">-->
<!--        <br>-->

        <div class="form-group">
            <label> Mobile No: </label>
            <input type="text" name="mobileNO" class="form-control"  placeholder="Enter Mobile No">
        </div>

<!--        <strong> Mobile No: </strong>-->
<!--        <input type="text" name="mobileNO">-->
<!--        <br>-->


        <div class="form-group">
           <label> Logo Image: </label>
        <input type="file" accept=".png, .jpg, .jpeg" name="logoImage">
        </div>



        <div class="form-group">
            <label>Currency: </label>
        <input type="text" name="currency">
        </div>



        <strong>Choose Currency</strong>
        <select class="form-control" name="chooseCurrency" id="Choose Currency">
            <option>Choose Currency</option>
            <option value="Before Amount">Before Amount</option>
            <option value="After Amount">After Amount</option>
        </select>
        <br>


        <div class="form-group"> Initial Balance
        <input  type="text" name="initialBalance">
        </div>




        <button class=" btn btn-success" type="submit" name="submit">Save Changes</button>

    </form>

    </div>
</div>

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


</body>
</html>