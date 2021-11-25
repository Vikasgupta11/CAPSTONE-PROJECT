<?php

if(!isset($_SESSION)){
  session_start();
}
include('./AdminInclude/header.php');
include('../dbconnection.php');

if($_SESSION['is_admin_login']){
$adminEmail=$_SESSION['adminLogEmail'];

}else{
  echo('<script> location.href="../index.php"; </script>');

}
$adminEmail=$_SESSION['adminLogEmail'];
if(isset($_REQUEST['adminPassUpdateBtn'])){

  if($_REQUEST['adminpass']==""){
    $passmsg="<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> Fill All Fields </div>";
  }
  else{
$sql="SELECT * FROM admin WHERE  admin_email='$adminEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
  $adminPass=$_REQUEST['adminpass'];
  $sql="UPDATE admin SET admin_pass='$adminPass' WHERE admin_email='$adminEmail'";
  if($conn->query($sql)==TRUE){
    $passmsg="<div class='alert alert-success col-sm-6 ml-5 mt-2 ' role='alert'>Updated Successfully </div>";
  }
  else{
    $passmsg="<div class='alert alert-danger col-sm ml-5 mt-2 'role='alert'>Unable to Update </div>";
  }
}

  }
}

?>

<div class="col-sm-9 mt-5 jumbotron">
  
<div class="row">
<div class="col-sm-6">

  <form class="mt-5 mx-5 "  >

    <div class="form-group"  style="margin:15px;">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" value="<?php echo $adminEmail; ?>"
      
     readonly >
    </div>

    <div class="form-group"   style="margin:15px;">
      <label for="inputnewpassword">New Password</label>
      <input type="text" class="form-control" id="inputnewpassword"
      placeholder="New Password"
      name="adminpass"
   >
    </div>

<button type="submit"  style="margin:15px;"  class="btn btn-danger mr-4 mt-4" name="adminPassUpdateBtn"   style="margin:15px;"> Update</button>
<button   style="margin:15px;" type="reset" class="btn btn-secondary  mt-4" >Reset</button>


<?php
if(isset($passmsg)){

  echo $passmsg;
}

?>
  </form>
</div>

</div>
</div>

<script>



document.title="Change Password";

</script>


