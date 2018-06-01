<?php
require_once("../vendor/autoload.php");
//if (!isset($_SESSION)) session_start();

$obj = new \App\SubTestCategory\SubTestCategory();

$allData = $obj->index();

//use App\Message\Message;
use App\Utility\Utility;

//$msg = Message::message();



?>

<!
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/main.css">
    <script src="../../resource/bootstrap/js/bootstrap.min.js"></script>





</head>
<body>





<div class="box">
    <div class="box-header">
        <h3 class="box-title">Active List- Sub Test Category</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table id="example1" class="table table-bordered table-striped">

            <thead>
            <tr>
<!--                <th>Check All<input type="checkbox" name="select_all" id="select_all"></th>-->
                <th>Serial</th>
                <th>ID</th>
                <th>Sub Test Name</th>
                <th>Test Name</th>
                <th>Lab ID</th>
                <th>Test Price</th>
                <th>Action Buttons</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $serial = 1;

            foreach ($allData as $record) {
                echo "
    
        <tr>
          <!--<td><input type='checkbox' class='checkbox' name='multiple[]' value='$record->id' ></td>-->
            <td>$serial</td>
            <td>$record->id</td>
            <td>$record->category_id</td>
            <td>$record->test_name</td>
            <td>$record->lab_id</td>
            <td>$record->test_price</td>
            
            <td>
            
            
             <a href='admin_master.php?page=view_sub_test_category&id=$record->id' class='btn btn-primary btn-sm'>View</a>
                  <a href='admin_master.php?page=edit_sub_test_category&id=$record->id' class='btn btn-warning btn-sm'>Edit</a>
<!--                  <a href='trash.php?id=$record->id' class='btn btn-success btn-sm'>Trash</a>-->
                    <a href='admin_master.php?page=delete_sub_test_category&id=$record->id' class='btn btn-danger btn-sm' onclick='return confirm_delete()'>Delete</a>
                
                
            
            </td>
    
         </tr>   
    
    
    
    ";

                $serial++;
            }

            ?>


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
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

<script>

    function confirm_delete(){
        return confirm("Are you sure?");
    }

</script>


<script>

    $('#deleteMultiple').click(function(){

        if(checkEmptySelection()){
            alert("Empty Selection! Please select some record(s) first")
        }
        else{
            var r = confirm("Are you sure you want to delete the selected record(s)?");

            if(r){
                var selectionForm =   $('#selectionForm');
                selectionForm.attr("action","delete_multiple.php");
                selectionForm.submit();
            }
        }
    });


</script>


<script>

    //select all checkboxes
    $("#select_all").change(function () {  //"select all" change
        var status = this.checked; // "select all" checked status
        $('.checkbox').each(function () { //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });

    $('.checkbox').change(function () { //".checkbox" change
//uncheck "select all", if one of the listed checkbox item is unchecked
        if (this.checked == false) { //if this item is unchecked
            $("#select_all")[0].checked = false; //change "select all" checked status to false
        }

//check "select all" if all checkbox items are checked
        if ($('.checkbox:checked').length == $('.checkbox').length) {
            $("#select_all")[0].checked = true; //change "select all" checked status to true
        }
    });

</script>

<script>

    function checkEmptySelection(){

        emptySelection =true;

        $('.checkbox').each(function(){
            if(this.checked)   emptySelection = false;
        });

        return emptySelection;
    }


    $("#trashMultiple").click(function(){

        if(checkEmptySelection()){
            alert("Empty Selection! Please select some record(s) first")
        }else{

            $("#selectionForm").submit();

        }




    }) ;



</script>




</body>
</html>