

<?php
include('./AdminInclude/header.php');
include_once("../dbconnection.php");

?>

<?php
$sql="SELECT * FROM course ";
$result=$conn->query($sql);
if($result->num_rows > 0){
$course=$result->num_rows;
}

$sql="SELECT * FROM student ";
$result=$conn->query($sql);
if($result->num_rows > 0){
$stu=$result->num_rows;
}

$sql="SELECT * FROM courseorder ";
$result=$conn->query($sql);
if($result->num_rows > 0){
$corder=$result->num_rows;
}



?>


      <div class="col-sm-9 mt-5">
        <div class="row mx-5 text-center">
          <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
              <div class="card-header">Courses</div>
              <div class="card-body">
                <h4 class="card-title">
                <?php echo $course;  ?>
                </h4>
                <a class="btn text-white" href="courses.php">View</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header">Students</div>
              <div class="card-body">
                <h4 class="card-title">
                <?php echo $stu;  ?>
                </h4>
                <a class="btn text-white" href="students.php">View</a>
              </div>
            </div>
          </div>



          <div class="col-sm-4 mt-5">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
              <div class="card-header">Sold</div>
              <div class="card-body">
                <h4 class="card-title">
                <?php echo $corder;  ?>
                </h4>
                <a class="btn text-white" href="sellReport.php">View</a>
              </div>
            </div>
          </div>
        </div>


        <!--  Table  -->
        <div class="mx-5 mt-5 text-center">
          <p class="bg-dark text-white p-2"> Course Ordered</p>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Course ID</th>
                <th scope="col">Student Email</th>
                <th scope="col">Order Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>



              </tr>

            </thead>
            <tbody>


<?php
$sql="SELECT * FROM courseorder";
$result=$conn->query($sql);
if($result->num_rows > 0){
while($row=$result->fetch_assoc()){


?>


              <tr>
                <th scope="row"><?php echo $row['order_id']; ?></th>
                <td><?php echo $row['co_id']; ?>     </td>   
                <td><?php echo $row['stu_email']; ?>   </td>
                <td><?php echo $row['order_date']; ?></td>
                <td><?php echo $row['amount']; ?></td>


                <td>
                <form action="" method="POST" class="d-inline">
                  <input type="hidden" name="id" value='<?php echo $row['co_id']; ?>'> 
                <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                    <i class="fa fa-trash-alt"></i>
                  </button>
</form>
                </td>
             
             
                </tr>



              <?php
}

              ?>
            </tbody>

          </table>

  <?php 
 } 
 else{
echo"<div class='alert alert-info ' role='alert'>No Results! </div>";
  }
  if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM courseorder WHERE co_id={$_REQUEST['id']}";
  if($conn->query($sql)==TRUE){
   $msg="Data Deleted Successfully! ";
    echo "<meta http-equiv='refresh' content= '0:URL=?deleted' />";
   

  }else{
    echo("<div class='alert alert-info ' role='alert'>Unable to Delete Data</div>");
  }
  if(isset($msg)){
    echo"<div class='alert alert-success' role='alert'>.$msg. </div>";
  }

  }
  ?>

        </div>
      </div>



    </div>




    <!-- End Side bar -->
    <?php
include('./AdminInclude/footer.php')

?>

<script>
document.title="Dashboard";
</script>