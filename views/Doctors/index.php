<?php
require_once("../vendor/autoload.php");
//$objSession = new App\Session\Session();
//if (!$objSession->is_signed_in()) {
//    \App\Utility\Utility::redirect("../../index.php");
//}

$obj = new \App\Doctors\Doctors();
$allData = $obj->index();

?>


<section class="content">

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Active List- Doctors</h2>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr>

<!--                    <th>Check All <input type="checkbox" name="select_all" id="select_all"></th>-->
                    <th>Serial</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Designation</th>
                    <th>Joining Date</th>
                    <th>Action Buttons</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $serial = 1;

                foreach ($allData as $record) {
                    echo "
        <tr>

<!--           <td><input type='checkbox' class='checkbox' name='multiple[]' value='$record->id' ></td>-->
            <td>$serial</td>
            <td>$record->id</td>
            <td>$record->doctor_name</td>
            <td>$record->mobile_no</td>
            <td>$record->designation</td>
            <td>$record->join_date</td>
            <td>
            
            <a href='admin_master.php?page=view_doctor_category&id=$record->id' class='btn btn-primary btn-sm'>View</></a>
            <a href='admin_master.php?page=edit_doctor_category&id=$record->id' class='btn btn-success btn-sm'>Edit</></a>
<!--       <a href='trash.php?id=$record->id' class='btn btn-warning btn-sm'>Trash</></a>-->
            <a href='admin_master.php?page=delete_doctor_category&id=$record->id' class='btn btn-danger btn-sm' onclick='return confirm_delete()'>Delete</></a>
            
            
            
            
            
            
            </td>

        </tr>
      
    ";// end of echo

                    $serial++;

                }// end of foreach loop

                ?>


                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>

</section>


<script>

    function confirm_delete(){
        return confirm("Are you sure?");
    }

</script>

<!--<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">-->
<!--    <ul class="pagination">-->
<!--        <li class="paginate_button previous" id="example2_previous"><a href="#" aria-controls="example1"-->
<!--                                                                       data-dt-idx="0" tabindex="0">Previous</a>-->
<!--        </li>-->
<!--        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="1"-->
<!--                                        tabindex="0">1</a></li>-->
<!--        <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="2"-->
<!--                                              tabindex="0">2</a></li>-->
<!--        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3"-->
<!--                                        tabindex="0">3</a></li>-->
<!--        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4"-->
<!--                                        tabindex="0">4</a></li>-->
<!--        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5"-->
<!--                                        tabindex="0">5</a></li>-->
<!--        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6"-->
<!--                                        tabindex="0">6</a></li>-->
<!--        <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1"-->
<!--                                                               data-dt-idx="7" tabindex="0">Next</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->