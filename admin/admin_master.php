<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../resource/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../resource/admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../resource/admin_asset/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../resource/admin_asset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../resource/admin_asset/dist/css/skins/_all-skins.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../resource/admin_asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../resource/admin_asset/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../resource/admin_asset/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="../resource/admin_asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="../resource/admin_asset/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../resource/admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'includes/header.php' ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'includes/sidebar_menu.php' ?>

    <div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->


    <?php



        if(isset($_GET['page'])){



            if($_GET['page'] == 'category'){
                include '../views/TestCategory/add_category.php';
            }

            elseif ($_GET['page'] == 'category_store')
            {
                include '../views/TestCategory/store.php';
            }

            elseif ($_GET['page'] == 'manage_category')
            {
                include '../views/TestCategory/index.php';
            }


            elseif ($_GET['page'] == 'view_category')
            {
                include '../views/TestCategory/view.php';
            }

            elseif ($_GET['page'] == 'edit_category')
            {
                include '../views/TestCategory/edit.php';
            }

            elseif ($_GET['page'] == 'update_category')
            {
                include '../views/TestCategory/update.php';
            }



            elseif ($_GET['page'] == 'delete_category')
            {
                include '../views/TestCategory/delete.php';
            }




            elseif ($_GET['page'] == 'add_sub_test_category')
            {
                include '../views/SubTestCategory/add_category.php';
            }

            elseif ($_GET['page'] == 'store_sub_test_category')
            {
                include '../views/SubTestCategory/store.php';
            }

            elseif ($_GET['page'] == 'manage_sub_test_category')
            {
                include '../views/SubTestCategory/index.php';
            }

            elseif ($_GET['page'] == 'view_sub_test_category')
            {
                include '../views/SubTestCategory/view.php';
            }

            elseif ($_GET['page'] == 'edit_sub_test_category')
            {
                include '../views/SubTestCategory/edit.php';
            }

            elseif ($_GET['page'] == 'update_sub_test_category')
            {
                include '../views/SubTestCategory/update.php';
            }


            elseif ($_GET['page'] == 'delete_sub_test_category')
            {
                include '../views/SubTestCategory/delete.php';
            }


            elseif ($_GET['page'] == 'add_doctor_category')
            {
                include '../views/Doctors/add_doctor.php';
            }

            elseif ($_GET['page'] == 'store_doctor_category')
            {
                include '../views/Doctors/store.php';
            }


            elseif ($_GET['page'] == 'manage_doctor_category')
            {
                include '../views/Doctors/index.php';
            }

            elseif ($_GET['page'] == 'view_doctor_category')
            {
                include '../views/Doctors/view.php';
            }



            elseif ($_GET['page'] == 'edit_doctor_category')
            {
                include '../views/Doctors/edit.php';
            }

            elseif ($_GET['page'] == 'update_doctor_category')
            {
                include '../views/Doctors/update.php';
            }

            elseif ($_GET['page'] == 'delete_doctor_category')
            {
                include '../views/Doctors/delete.php';
            }


            elseif ($_GET['page'] == 'add_expense_category')
            {
                include '../views/Expenses/add_category.php';
            }

            elseif ($_GET['page'] == 'store_expense_category')
            {
                include '../views/Expenses/store.php';
            }

            elseif ($_GET['page'] == 'manage_expense_category')
            {
                include '../views/Expenses/index.php';
            }

            elseif ($_GET['page'] == 'view_expense_category')
            {
                include '../views/Expenses/view.php';
            }

            elseif ($_GET['page'] == 'edit_expense_category')
            {
                include '../views/Expenses/edit.php';
            }

            elseif ($_GET['page'] == 'update_expense_category')
            {
                include '../views/Expenses/update.php';
            }

            elseif ($_GET['page'] == 'delete_expense_category')
            {
                include '../views/Expenses/delete.php';
            }




            elseif ($_GET['page'] == 'add_invoice')
            {
                include '../views/Invoice/add_invoice.php';
            }

            elseif ($_GET['page'] == 'manage_invoice')
            {
                include '../views/Invoice/index.php';
            }

            elseif ($_GET['page'] == 'view_invoice')
            {
                include '../views/Invoice/view.php';
            }

            elseif ($_GET['page'] == 'edit_invoice')
            {
                include '../views/Invoice/edit.php';
            }

            elseif ($_GET['page'] == 'update_invoice')
            {
                include '../views/Invoice/update.php';
            }


            elseif ($_GET['page'] == 'delete_invoice')
            {
                include '../views/Invoice/delete.php';
            }

            elseif ($_GET['page'] == 'add_custom_invoice')
            {
                include '../views/CustomInvoice/add_custom_invoice.php';
            }

            if($_GET['page'] == 'manage_custom_invoice')
            {
                include '../views/CustomInvoice/index.php';
            }

            elseif ($_GET['page'] == 'view_custom_invoice') {

                include '../views/CustomInvoice/view.php';
            }

            elseif ($_GET['page'] == 'print_custom_invoice') {
                include '../views/CustomInvoice/print_invoice_details.php';

            }

            elseif ($_GET['page'] == 'delete_custom_invoice') {
                include '../views/CustomInvoice/delete.php';

            }


            elseif ($_GET['page'] == 'add_custom_doctor_invoice') {
                include '../views/CustomDoctorInvoice/add_custom_doctor_invoice.php';

            }

            elseif ($_GET['page'] == 'manage_custom_doctor_invoice')
            {
                include '../views/CustomDoctorInvoice/index.php';
            }

            elseif ($_GET['page'] == 'view_custom_doctor_invoice')
            {
                include '../views/CustomDoctorInvoice/view.php';
            }

            elseif ($_GET['page'] == 'print_doctor_invoice_details')
            {
                include '../views/CustomDoctorInvoice/print_invoice_details.php';
            }

            elseif ($_GET['page'] == 'delete_custom_doctor_invoice')
            {
                include '../views/CustomDoctorInvoice/delete.php';
            }


            elseif ($_GET['page'] == 'add_income_report')
            {
                include '../views/IncomeReport/add_income_report.php';
            }

            elseif ($_GET['page'] == 'manage_income_report')
            {
                include '../views/IncomeReport/index.php';
            }


            elseif ($_GET['page'] == 'add_expense_report')
            {
                include '../views/ExpenseReport/add_expense_report.php';
            }

            elseif ($_GET['page'] == 'manage_expense_report')
            {
                include '../views/ExpenseReport/index.php';
            }

            elseif ($_GET['page'] == 'total_report')
            {
                include '../views/TotalReport/add_total_report.php';
            }

            elseif ($_GET['page'] == 'manage_total_report')
            {
                include '../views/TotalReport/index.php';
            }


            elseif ($_GET['page'] == 'add_settings')
            {
                include '../views/Settings/add_settings.php';
            }

            elseif ($_GET['page'] == 'add_admin')
            {
                include '../views/AddAdmin/add_admin.php';
            }

            elseif ($_GET['page'] == 'store_admin')
            {
                include '../views/AddAdmin/store.php';
            }


            elseif ($_GET['page'] == 'manage_admin')
            {
                include '../views/AddAdmin/index.php';
            }

            elseif ($_GET['page'] == 'view_admin')
            {
                include '../views/AddAdmin/view.php';
            }


            elseif ($_GET['page'] == 'edit_admin')
            {
                include '../views/AddAdmin/edit.php';
            }


            elseif ($_GET['page'] == 'delete_admin')
            {
                include '../views/AddAdmin/delete.php';
            }


        }else{
            include  'includes/home_content.php';
        }





    ?>
    <!-- /.content-wrapper -->

        <!-- /.content -->
    </div>
    <?php include 'includes/footer.php'?>
    <!-- Control Sidebar -->
<!--    -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../resource/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../resource/admin_asset/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../resource/admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../resource/admin_asset/bower_components/raphael/raphael.min.js"></script>
<script src="../resource/admin_asset/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../resource/admin_asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- DataTables -->
<script src="../resource/admin_asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- jvectormap -->
<script src="../resource/admin_asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../resource/admin_asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../resource/admin_asset/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../resource/admin_asset/bower_components/moment/min/moment.min.js"></script>
<script src="../resource/admin_asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../resource/admin_asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../resource/admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../resource/admin_asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../resource/admin_asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../resource/admin_asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../resource/admin_asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../resource/admin_asset/dist/js/demo.js"></script>
<script>
    $(document).ready(function () {
        $('#example1').DataTable({

            'paging'      : true,




        });
    });
</script>
</body>
</html>
