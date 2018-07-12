<?php

require_once("../vendor/autoload.php");

//session_start();

$objTestCategory = new App\TestCategory\TestCategory();

$objSubTestCategory = new App\SubTestCategory\SubTestCategory();

$objDoctors = new App\Doctors\Doctors();

$objExpenses = new App\Expenses\Expenses();


//$admin_id = $_SESSION['admin_id'];
//if($admin_id == NULL)
//{
//    //\App\Utility\Utility::redirect("index.php");
//}


?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php $row_count = $objTestCategory->count_rows();
                            echo $row_count ?></h3>

                        <p>Test Categories</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="admin_master.php?page=manage_category" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php $row_count = $objSubTestCategory->count_rows();
                            echo $row_count ?></h3>

                        <p>Sub Test Categories</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="admin_master.php?page=manage_sub_test_category" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php $row_count = $objDoctors->count_rows();
                            echo $row_count ?></h3>

                        <p>Doctors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="admin_master.php?page=manage_doctor_category" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php $row_count = $objExpenses->count_rows();
                            echo $row_count ?></h3>

                        <p>Expenses</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="admin_master.php?page=manage_expense_category" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">

                <!-- Chat box -->

                <!-- /.box (chat box) -->

                <!-- TO DO List -->

                <!-- /.box -->

                <!-- quick email widget -->


            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

                <!-- Map box -->


                <!-- solid sales graph -->

                <!-- /.box -->

                <!-- Calendar -->

                <!-- /.box -->

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
