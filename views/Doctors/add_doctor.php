<?php

require_once("../vendor/autoload.php");
//$objSession = new App\Session\Session();
//
//if (!$objSession->is_signed_in()) {
//   \App\Utility\Utility::redirect("../../index.php");
//}

//var_dump($objSession);

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
    <title>Add Doctor Information</title>

    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../resource/datepicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/formstyle.css">
    <style>
        body {
            background: antiquewhite;
        }
    </style>
</head>
<body>
<div class="container">

    <h2 style="color: #442a8d;">Doctor Information Entry</h2>

    <div class="col-md-4">
    <form  action="../views/Doctors/store.php" method="post" enctype="multipart/form-data">



        <div class="form-group">
            <label>Profile Picture</label>
            <input class="form-control" type="file" accept=".png, .jpg, .jpeg" name="profilePicture">
        </div>



        <div class="form-group">
            <label>Doctor Name</label>
            <input type="text" name="doctorName" class="form-control"  placeholder="Enter name">
        </div>


        <div class="form-group">
            <label> Father's Name:</label>
            <input type="text" name="fatherName" class="form-control"  placeholder="Enter name">
        </div>



        <div class="form-group">
            <label> Mother's Name: </label>
            <input type="text" name="motherName" class="form-control"  placeholder="Enter name">
        </div>


        <div class="form-group">
            <label> E-mail: </label>
            <input type="email" name="email" class="form-control"  placeholder="Enter mail">
        </div>




        <div class="form-group">
            <label> Mobile No: </label>
            <input type="text" name="mobileNo" class="form-control"  placeholder="Enter Mobile No">
        </div>





        <strong> Contact Address: </strong>
        <textarea rows="2" class="form-control" name="contactAddress"></textarea>
        <br>

        <strong> Designation: </strong>
        <textarea rows="2" class="form-control" name="designation"></textarea>
        <br>

        <div class="form-group">
            <label> Date of Birth: </label>
            <input class="form-control datepicker" class="form-control" type="text" name="birthDate">
        </div>



        <div class="form-group">
            <label> Join Date: </label>
            <input class="form-control datepicker" class="form-control" type="text" name="joinDate">
        </div>




        <button class=" btn btn-success" type="submit" name="submit">Submit</button>

    </form>
    </div>


</div>
<script src="../../resource/bootstrap/js/jquery.js"></script>
<script src="../../resource/datepicker/js/bootstrap-datepicker.js"></script>

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

<!--        <strong> Profile Picture</strong>-->
<!--        <input type="file" accept=".png, .jpg, .jpeg" name="profilePicture">-->
<!--        <br>-->

<!--        <strong> Doctor Name:</strong>-->
<!--        <input type="text" name="doctorName">-->
<!--        <br>-->

<!--        <strong> Father's Name: </strong>-->
<!--        <input type="text" name="fatherName">-->
<!--        <br>-->

<!---->
<!--        <strong> Mother's Name: </strong>-->
<!--        <input type="text" name="motherName">-->
<!--        <br>-->

<!--        <strong> E-mail: </strong>-->
<!--        <input type="email" name="email">-->
<!--        <br>-->
<!--        <strong> Mobile No: </strong>-->
<!--        <input type="text" name="mobileNo">-->
<!--        <br>-->


<!--        <strong> Date of Birth</strong>-->
<!--        <input class="datepicker" type="text" name="birthDate">-->
<!--        <br>-->


<!--        <strong> Join Date </strong>-->
<!--        <input class="datepicker" type="text" name="joinDate">-->
<!--        <br>-->


<!--<script>-->
<!--    $(function () {-->
<!--        $('.datepicker').datepicker()-->
<!---->
<!--    });-->
<!---->
<!--</script>-->