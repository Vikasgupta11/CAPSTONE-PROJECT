<?php
if(isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');
include('./mainInclude/header.php');


if(isset($_SESSION['is_login'])){

    $stuEmail=$_SESSION['stuLogEmail'];
   
}
else{
    echo("<script>  location.href='../index.php'; </script>");
}


if(isset($_REQUEST['stuPassUpdate'])){
    if($_REQUEST['stunewpass']==""){
$passmsg="<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>Fill All Fields </div>";
    }
    else{
$sql="SELECT * FROM student WHERE stu_email='$stuEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $stuPass=$_REQUEST['stunewpass'];

    $sql="UPDATE student SET stu_pass= '$stuPass' WHERE stu_email='$stuEmail'";
    if($conn->query($sql)==TRUE){
        $passmsg="<div class='alert alert-success col-sm-6 ml-5 mt-2' role='alert'>Upadted Successfully </div>";

    }
    else{
        $passmsg="<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>Unable to Update </div>";

    }
}

    }
}

?>









<div class="col-sm-9 col-md-10">
    <div class="row"  style="width:500px;">
        <form action="" class="mt-5 mx-5" method="POST">

<div class="form-group" >
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail"
    value="<?php echo $stuEmail;  ?>" readonly>


</div>

      <br>

<div class="form-group">
    <label for="Password">New Password </label>
    <input type="text" class="form-control" id="inputnewpassword" name="stunewpass"
    placeholder="New Password"
    >


</div>
<button type="submit" class="btn btn-primary mr-4 mt-4" name="stuPassUpdate">Update</button>

<button type="reset" class="btn btn-secondary mt-4">Reset</button>

<?php
if(isset($passmsg)){
    echo $passmsg;
}

?>


</form>
    </div>

</div>
