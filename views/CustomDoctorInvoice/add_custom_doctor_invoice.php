<?php

require_once("../vendor/autoload.php");
//if (!isset($_SESSION)) session_start();


$objDoctor = new \App\Doctors\Doctors();
$doctors = $objDoctor->index();





?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Custom Doctor Wise Report</title>

    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../resource/datepicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/formstyle.css">

    <style>
        body {
            background: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">


        <h3 style="color: #442a8d;width:1000%; font-size:">  Custom Doctor Wise Report Entry</h3>

            <form action="admin_master.php?page=manage_custom_doctor_invoice" method="post">



                <div class="form-group">
                    <label> From Date:</label>
                    <input  type="text" class="form-control datepicker"  name="fromDate">
                </div>

                <div class="form-group">
                    <label> To Date:</label>
                    <input type="text" class="form-control datepicker"   name="toDate">
                </div>

<!--                <strong> From Date:</strong>-->
<!--                <input class="datepicker"   type="text" name="fromDate">-->
<!--                <br>-->
<!---->
<!---->
<!---->
<!--                <strong> To Date:</strong>-->
<!--                <input class="datepicker"   type="text" name="toDate">-->
<!--                <br>-->



                <strong>Select Doctor </strong>
                <select class="form-control" name="doctorName" id="Select Doctor">

                        <option>Select Doctor</option>
                        <?php
                        foreach ($doctors as $doctor):
                            ?>
                            <option value="<?php echo $doctor->id; ?>"><?php echo $doctor->doctor_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                <br>


                <button class="btn btn-success" type="submit">View Report</button>

            </form>
        </div>
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