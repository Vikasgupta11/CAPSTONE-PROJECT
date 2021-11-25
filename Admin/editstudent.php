<?php
include('./AdminInclude/header.php');
include('../dbconnection.php');

if(isset($_REQUEST['newStuSubmitBtn'])){
  // Checking for Empty Fields

  if(($_REQUEST['stu_name']=="") || ($_REQUEST['stu_email']=="") || ($_REQUEST['stu_id']=="")
  || ($_REQUEST['stu_occ']=="")

  ){
$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>All Fields are Required </div>";
}
else{
    $cid=$_REQUEST['stu_id'];
     $cname=$_REQUEST['stu_name'];
     $cdesc=$_REQUEST['stu_email'];
    $stu_occ=$_REQUEST['stu_occ'];
// Start Getting course Image
    


$sql="UPDATE student SET stu_id='$cid',stu_name='$cname' ,stu_email='$cdesc', stu_occ='$stu_occ' WHERE stu_id='$cid' ";

  
}if($conn->query($sql)==TRUE){
    $msg='<div class"alert alert-success col-s,-6 ml-5 mt-2" role="alert">Updated Successfully</div>';

}else{ $msg='<div class"alert alert-danger col-s,-6 ml-5 mt-2" role="alert">Unable to Update</div>';

}
}



?>

<div class="col-sm-6 mt-5 mx-3  jumbotron" style="background-color :#d3d3d3;">
    <h3 class="text-center">Update Student Details</h3>
    
<?php

if(isset($_REQUEST['view'])){
    $sql="SELECT  * FROM student WHERE stu_id= {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

}
?>




    
    <form action="" method="POST" enctype="multipart/form-data">
       
    <div class="form-group" >
            <label for="stu_name">Student Id</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id"
            value="<?php if(isset($row['stu_id'])){
                echo($row['stu_id']);
            } ?>"
            
            readonly >

        </div>


        <div class="form-group" >
            <label for="stu_name">Student  Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name"
            value="<?php if(isset($row['stu_name'])){
                echo($row['stu_name']);
            } ?>"
            >

        </div>
 
        
<div class="form-group">
<label for="stu_email">Student Email</label>
<input class="form-control" id="stu_email" name="stu_email"
value="<?php if(isset($row['stu_email'])){
                echo($row['stu_email']);
            } ?>"
>
</div>


      <div class="form-group">
<label for="=stu_pass">Student Password</label>
<input class="form-control" id="stu_pass" name="stu_pass"
value="<?php if(isset($row['stu_pass'])){
                echo($row['stu_pass']);
            } ?>"
></input>
</div> 


        
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ"
            value="<?php if(isset($row['stu_occ'])){
                echo($row['stu_occ']);
            } ?>"
            >

        </div>


     

       

      

<div class="text-center">
<button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">

Submit
</button>
    <a href="student.php" class="btn btn-secondary">Close</a>
</div>

<?php
if(isset($msg)){
    echo($msg);
}

?>





<?php
include('./AdminInclude/footer.php')

?>
<script>



document.title="Edit Lessons";

</script>