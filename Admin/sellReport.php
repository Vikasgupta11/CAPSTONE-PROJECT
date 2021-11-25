<?php
include('./AdminInclude/header.php');
include('../dbconnection.php');
     
// if(!isset($_SESSION)){
//     session_start();
//   }
  
  
//   if($_SESSION['is_admin_login']){
//   $adminEmail=$_SESSION['adminLogEmail'];
//     }
//else{
//     echo('<script> location.href="../index.php"; </script>');
  
//   }

?>

<div class="col-sm-9 mt-5">
    <form action="" method="POST" class="d-print-none">
        <div class="form row" >
            <div class="form-group col-md-2" > 
                <input type="date" class="form-control" id="startdate" name="startdate"style="cursor:pointer;">

            </div>
</br>
            <div class="form-group  col-md-2">
                <input type="date" class="form-control" id="enddate" name="enddate" style="cursor:pointer;">

            </div>
</br>
            <div class="form-group col-md-2">
                <input type="submit" class="btn btn-secondary" style="background-color:#078aff;cursor:pointer;" name="searchsubmit" value="Search">
            </div>

            
        </div>
    </form>
<?php
if(isset($_REQUEST['searchsubmit'])){
    $startdate=$_REQUEST['startdate'];
    $enddate=$_REQUEST['enddate'];
    $sql="SELECT * FROM courseorder WHERE order_date BETWEEN '$startdate' AND '$enddate' ";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
 
?>

<p class="bg-dak text-white p-2 mt-4">Details</p>
<table class="table">
<thead>
    <tr>
    <th scope="col">Order ID</th>
    <th scope="col">Course ID</th>
    <th scope="col">Student</th>
    <th scope="col">Payment</th>
    <th scope="col">Order Date</th>
    <th scope="col">Amount</th>
</tr>
</thead>
<tbody>
<?php

while($row=$result->fetch_assoc()){
  echo ' <tr>
  <td>'.$row["order_id"].' </td>

  <td>'.$row["course_id"].' </td>
<td>'.$row["stu_email"].' </td>
<td>'.$row["status"].' </td>
<td>'.$row["order_date"].' </td>
<td>'.$row["amount"].' </td>

</tr>';
}
?>
<tr>
<td>
<form class="d-print-none">

    <input class="btn btn-danger" type="submit" value="Print" onclick="window.print()">
</form>

</td></tr>


</tbody>
</table>




<?php

    }
else{
    echo"<div class='alert alert-warning col-sm-6 ml-5 mt-2 ' role='alert'> No Records! </div>";
}


}

?>



</div>

<script>



document.title="Sell Report";

</script>


