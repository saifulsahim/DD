
    <!-- sidebar: style can be found in sidebar.less -->

        <!-- Sidebar user panel -->
<!--        <div class="user-panel">-->
<!--            <div class="pull-left image">-->
<!--                <img src="../../resource/admin_asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
<!--            </div>-->
<!--            <div class="pull-left info">-->
<!--                <p>Alexander Pierce</p>-->
<!--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
<!--            </div>-->
<!--        </div>-->
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search...">-->
<!--                <span class="input-group-btn">-->
<!--                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
<!--            <li class="header">MAIN NAVIGATION</li>-->
            <li class="active treeview">
                <a href="../admin_master.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <!--                    <span class="pull-right-container">-->
                    <!--              <i class="fa fa-angle-left pull-right"></i>-->
                    <!--                    </span>-->
                </a>
                <ul class="treeview-menu">
                    <!--                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>-->
                    <!--                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>-->
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Test Category</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin_master.php?page=category"><i class="fa fa-circle-o"></i>Add Test Category</a>
                    </li>
                    <li><a href="admin_master.php?page=manage_category"><i class="fa fa-circle-o"></i>Manage Test
                            Category</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Sub Test Category</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin_master.php?page=add_sub_test_category"><i class="fa fa-circle-o"></i>Add Category</a></li>
                    <li><a href="admin_master.php?page=manage_sub_test_category"><i class="fa fa-circle-o"></i> Manage Category</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Doctors</span>
                    <span class="pull-right-container">
                    <span class="label label-primary pull-right">2</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin_master.php?page=add_doctor_category"><i class="fa fa-circle-o"></i> Add Doctor</a></li>
                    <li><a href="admin_master.php?page=manage_doctor_category"><i class="fa fa-circle-o"></i> Manage Doctor </a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Expenses</span>
                    <span class="pull-right-container">
                    <span class="label label-primary pull-right">2</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin_master.php?page=add_expense_category"><i class="fa fa-circle-o"></i> Add Expense Category</a></li>
                    <li><a href="admin_master.php?page=manage_expense_category"><i class="fa fa-circle-o"></i> Manage Expense Category</a>
                    </li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span> Invoice</span>
                    <span class="pull-right-container">
                    <span class="label label-primary pull-right">2</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin_master.php?page=add_invoice"><i class="fa fa-circle-o"></i> Add Test Invoice</a></li>
                    <li><a href="admin_master.php?page=manage_invoice"><i class="fa fa-circle-o"></i> Manage Test Invoice</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span> Manage Invoice</span>
                    <span class="pull-right-container">
                    <span class="label label-primary pull-right">3</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> Today Invoice</a></li>
                    <li><a href="admin_master.php?page=add_custom_invoice"><i class="fa fa-circle-o"></i> Custom Invoice</a></li>
                    <li><a href="admin_master.php?page=add_custom_doctor_invoice"><i class="fa fa-circle-o"></i> Custom Doctor Invoice</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span> Reports</span>
                    <span class="pull-right-container">
                    <span class="label label-primary pull-right">3</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin_master.php?page=add_income_report"><i class="fa fa-circle-o"></i> Income Report</a></li>
                    <li><a href="admin_master.php?page=add_expense_report"><i class="fa fa-circle-o"></i> Expense Report</a></li>
                    <li><a href="admin_master.php?page=total_report"><i class="fa fa-circle-o"></i> Total Report</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span> General Settings</span>
                    <span class="pull-right-container">
                    <span class="label label-primary pull-right">3</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin_master.php?page=add_settings"><i class="fa fa-circle-o"></i> Settings </a></li>
                    <li><a href="admin_master.php?page=add_admin"><i class="fa fa-circle-o"></i> Add Admin</a></li>
                    <li><a href="admin_master.php?page=manage_admin"><i class="fa fa-circle-o"></i> Manage Admin</a></li>
                </ul>
            </li>









        </ul>

    <!-- /.sidebar -->
