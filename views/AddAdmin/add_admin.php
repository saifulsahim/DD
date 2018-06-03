<?php

require_once("../vendor/autoload.php");

$objSession = new App\Session\Session();

if (isset($_POST['login'])) {
    \App\Utility\Utility::redirect("../../index.php");
}


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
    <title>Edit Admin Information</title>

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
    <div class="col-md-4">

        <h2 style="color: #442a8d;">Admin Information Entry</h2>

        <form action="../views/AddAdmin/store.php" method="post">

            <div class="form-group">
                <label> Name:</label>
                <input class="form-control"  type="text" name="adminName">
            </div>


            <div class="form-group">
                <strong> E-mail: </strong>
                <input class="form-control" type="email" name="email">
            </div>

            <div class="form-group">
                <strong> Password: </strong>
                <input class="form-control" type="password" name="password">
            </div>


            <div class="form-group">
                <strong> Confirm Password: </strong>
                <input class="form-control" type="password" name="confirmPassword">
            </div>


            <div class="form-group">
                <strong>Admin Role</strong>
                <select class="form-control" name="adminRole" id="adminRole">
                    <option>Select Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Operator">Operator</option>
                </select>
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