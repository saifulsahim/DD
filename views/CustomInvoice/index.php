
<?php
require_once("../vendor/autoload.php");

//if (!isset($_SESSION)) session_start();

if(!isset($_POST['fromDate'])) {
    \App\Utility\Utility::redirect("add_custom_invoice.php");
}

$fromDate = $_POST['fromDate'];
$toDate = $_POST['toDate'];




$objCustomInvoice = new App\CustomInvoice\CustomInvoice();

$allData = $objCustomInvoice->index($fromDate, $toDate);

//var_dump($allData);



?>



<section class="content">

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Active List- Custom Invoice</h2>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr>

                    <!--                    <th>Check All <input type="checkbox" name="select_all" id="select_all"></th>-->
                    <th>Serial</th>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Test Name</th>
                    <th>Ref By</th>
                    <th>Invoice No</th>
                    <th>Invoice Type</th>
                    <th>Date</th>
                    <th>Total Amount</th>
                    <th>Entry By</th>
                    <th>Action Buttons</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $serial = 1;

                foreach ($allData as $record) {

                    echo "
                         
                         
                <tr>
                
               
                    <td>$serial</td>
                    <td>$record->id</td>
                    <td>$record->patient_name</td>
                    <td>$record->test_name</td>
                    <td>$record->doctor_name</td>
                    <td>$record->invoice_no</td>
                    <td>$record->invoice_type</td>
                    <td>$record->delivery_date</td>                 
                    <td>$record->total</td>                  
                    <td>$record->admin_name</td>
               
                    <td>
                      <a href='admin_master.php?page=view_custom_invoice&id=$record->id' class='btn btn-primary btn-sm'>View</a>
                     <a href='admin_master.php?page=print_custom_invoice&invoice_no=$record->invoice_no' class='btn btn-success btn-sm'  title='Print'  target=\"_blank\">Print</></a>
                     <a href='admin_master.php?page=delete_custom_invoice&id=$record->id' class='btn btn-danger btn-sm' onclick='return confirm_delete()'>Delete</a>
                       
                        
                    
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