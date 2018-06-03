<?php

require_once("../vendor/autoload.php");
//if (!isset($_SESSION)) session_start();
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

        <form  action="../views/Doctors/update.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Profile Picture</label>
            <input type="file" accept=".png, .jpg, .jpeg" name="profilePicture" class="form-control" value="<?php echo $singleData->profile_picture ?>">
        </div>


        <div class="form-group">
            <label>Doctor Name</label>
            <input type="text" name="doctorName" class="form-control" value="<?php echo $singleData->doctor_name ?>">
        </div>

            <div class="form-group">
                <label> Father's Name:</label>
                <input type="text" name="fatherName" class="form-control" value="<?php echo $singleData->father_name ?>">
            </div>

            <div class="form-group">
                <label> Mother's Name: </label>
                <input type="text" name="motherName" class="form-control" value="<?php echo $singleData->mother_name ?>">
            </div>

            <div class="form-group">
                <label> E-mail: </label>
                 <input type="email" name="email" class="form-control" value="<?php echo $singleData->email ?>">
            </div>

            <div class="form-group">
                <label> Mobile No: </label>
                <input type="text" name="mobileNo" class="form-control" value="<?php echo $singleData->mobile_no ?>">
            </div>

        <strong> Contact Address: </strong>
        <textarea rows="2" class="form-control" name="contactAddress"><?php echo $singleData->contact_address ?></textarea>
        <br>

        <strong> Designation: </strong>
        <textarea rows="2" class="form-control" name="designation"><?php echo $singleData->designation ?></textarea>
        <br>


            <div class="form-group">
                <label> Date of Birth: </label>
                <input class="form-control datepicker" type="text"  name="birthDate" value="<?php echo $singleData->birth_date ?>">
        <br>

        <strong> Join Date </strong>
        <input class="form-control datepicker" type="text" name="joinDate" value="<?php echo $singleData->join_date ?>">
        <br>


        <input type="hidden" name="id" value="<?php echo $singleData->id?>">


        <button class=" btn btn-success" type="submit" name="submit" value="Update">Update</button>

    </form>
    </div>



</div>
<script src="../../resource/bootstrap/js/jquery.js"></script>
<script src="../../resource/datepicker/js/bootstrap-datepicker.js"></script>
<script>
    $(function () {
        $('.datepicker').datepicker()

    });
</script>
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