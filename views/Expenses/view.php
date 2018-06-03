<?php
require_once ("../vendor/autoload.php");
//use App\Message\Message;
//
//$msg = Message::message();
//
//echo "<div>  <div id='message'>  $msg </div>   </div>";


$obj = new \App\Expenses\Expenses();

$obj->setData($_GET);

$singleData= $obj->view();

?>
<div class="col-md-8">
<h1>Single Record information- Expenses </h1>
<table class="table table-bordered table-striped">


    <?php



        echo "
            <tr>
            
                <th>ID</th>          <td>$singleData->id</td>
             
            <tr>
            
            
            <tr>
                 <th>Name</th>       <td>$singleData->name</td>
            
            </tr>
                
              
              
             <tr>
                
                    <th>Description</th>      <td>$singleData->description</td>
                    
             </tr>
                
               
                
            
            
            
            
            ";




    ?>

</table>
</div>


