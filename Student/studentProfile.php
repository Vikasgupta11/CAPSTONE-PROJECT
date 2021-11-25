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

$sql="SELECT * FROM student WHERE stu_email='$stuEmail'" ;
$result=$conn->query($sql);
if($result->num_rows==1){
$row=$result->fetch_assoc();
$stuId=$row['stu_id'];
$stuName=$row['stu_name'];
$stuOcc=$row['stu_occ'];
$stu_img=$row['stu_img'];
}


if(isset($_REQUEST['updateStuNameBtn'])){

    if(($_REQUEST['stuName']=="")){
$passmsg='<div class=" alert alert-warning" role="alert">Fill All Fields</div>';
    }
    else{

        $stuName=$_REQUEST['stuName'];
        $stuOc=$_REQUEST['stuOcc'];
        //Start Getting Stu Images 
        $stuImage=$_FILES['stu_img']['name'];
        $stu_image_temp=$_FILES['stu_img']['tmp_name'];
        $img_folder='../images/'.$stuImage;
        move_uploaded_file($stuImage,$img_folder);


        $sql="UPDATE  student SET stu_name='$stuName' , stu_occ=' $stuOc' ,stu_img='$img_folder'
        WHERE stu_email='$stuEmail' ";

        if($conn->query($sql)==TRUE){
$passmsg='<div class="alert alert-success" role="alert"> Updated Successfully </div>';
        }
        else{
            $passmsg="<div> Unable to Update</div>";
        }
    }
}


?>


<div class="col-sm-6 mt-5" >
<form class="mx-5" method="POST" enctype="multipart/form-data">
   
   
    <div class="form-group">
        <label for="stuId">Student ID</label>
        <input type="text" class="form-control" id="stuId" name="stuId"
        value="<?php if(isset($stuId)) {echo$stuId;} ?>"
        
        readonly>

    </div> <br>



    <div class="form-group">
        <label for="stuId">Email</label>
        <input type="text" class="form-control" id="stuEmail" name="stuEmail"
        value="<?php if(isset($stuId)) {echo$stuEmail;} ?>"
       
        readonly >

    </div> <br>


    <div class="form-group">
        <label for="stuName">Name</label>
        <input type="text" class="form-control" id="stuName" name="stuName"
        value="<?php if(isset($stuName)) {echo$stuName;} ?>"
        >

    </div>
    <br>
    
    <div class="form-group">
        <label for="stuOcc">Occupation</label>
        <input type="text" class="form-control" id="stuOcc" name="stuOcc"
        value="<?php if(isset($stuOcc)) {echo$stuOcc;} ?>"
        >

    </div> <br>



    <div class="form-group">
        <label for="stu_img">Upload Image</label>
        <input type="file" class="form-control-file" id="stu_img" name="stu_img"
     
        >

    </div> <br>

<button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>&nbsp; &nbsp;


<?php
if(isset($passmsg)){
    echo($passmsg);   
}

?>

</div>
<!-- // End OF ROW DIV from header -->
</div>

</form>   
</div>
<?php
include('./mainInclude/footer.php');
?>