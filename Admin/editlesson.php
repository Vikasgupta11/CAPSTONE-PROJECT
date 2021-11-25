<?php


if(!isset($_SESSION)){
    session_start();
  }


  if($_SESSION['is_admin_login']){
    $adminEmail=$_SESSION['adminLogEmail'];
    
    }else{
      echo('<script> location.href="../index.php"; </script>');
    
    }



include('./AdminInclude/header.php');
include('../dbconnection.php');

if(isset($_REQUEST['requpdate'])){
  // Checking for Empty Fields

  if(($_REQUEST['lesson_name']=="") || ($_REQUEST['lesson_desc']=="") || ($_REQUEST['course_id']=="") || ($_REQUEST['course_name']=="") || ($_REQUEST['lesson_id']=="")
){
$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>All Fields are Required </div>";
}
else{

    
    $lid=$_REQUEST['lesson_id'];
     $lname=$_REQUEST['lesson_name'];
     $cdesc=$_REQUEST['lesson_desc'];
     $course_id=$_REQUEST['course_id'];
     $cname=$_REQUEST['course_name'];
 $link='../lessonvid/'.$_FILES['lesson_link']['name'];
                     
    //  $coriginal_price=$_REQUEST['lesson_link'];
// Start Getting course Image
    
    //  $cimg="../images/".$_FILES['course_img']['name'];
    //  Move image in folder
    //  move_uploaded_file($course_image_temp,$img_folder);
//// End Course Of Course Image 

$sql="UPDATE lessons SET lesson_id='$lid' , lesson_name='$lname' , lesson_desc='$cdesc' , course_id='$course_id' , course_name='$cname' ,
lesson_link='$link'  WHERE lesson_id= '$lid' ";

  
}if($conn->query($sql)==TRUE){
    $msg='<div class"alert alert-success col-s,-6 ml-5 mt-2" role="alert">Updated Successfully</div>';

}else{ $msg='<div class"alert alert-danger col-s,-6 ml-5 mt-2" role="alert">Unable to Update</div>';

}
}



?>

<div class="col-sm-6 mt-5 mx-3  jumbotron" style="background-color :#d3d3d3;">
    <h3 class="text-center">Update Lessons Details</h3>
    
<?php

if(isset($_REQUEST['view'])){
    $sql="SELECT  * FROM lessons WHERE lesson_id= {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    
}
?>






    <form action="" method="POST" enctype="multipart/form-data">
      
      
    <div class="form-group" >
            <label for="lesson_name">Lesson Id</label>
            <input type="text" class="form-control" id="lesson_id" name="lesson_id"
            value="<?php if(isset($row['lesson_id'])){   echo($row['lesson_id']); } ?>"
            readonly >

        </div>
 
      
      
      
      
      
      
        <div class="form-group" >
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name"
            value="<?php if(isset($row['lesson_name'])){   echo($row['lesson_name']); } ?>"
            >

        </div>
 
        
<div class="form-group">
<label for="lesson_desc"> lesson  Description</label>
<textarea class="form-control" id="lesson_desc" name="lesson_desc" 
>
<?php if(isset($row['lesson_desc'])){   echo($row['lesson_desc']); } ?>
</textarea>
</div>

        <div class="form-group">
            <label for="course_id"> Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id"
            value="<?php if(isset($row['course_id'])){   echo($row['course_id']); } ?>"
            readonly
            >

        </div>


        
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name"
onkeypress="isInputNumber(event)"

            value="<?php if(isset($row['course_name'])){   echo($row['course_name']); } ?>"
            readonly
            >

        </div>


        <div class="form-group">
            <label for="lesson_link">Lesson link</label>
<div class="embed-reponsive embed-responsive-16by9">
    <iframe class="embed-responsive-item"  

     src="<?php if(isset($row['lesson_link'])){ echo $row["lesson_link"];} ?>"  allowfullscreen >
    </iframe>

    <!-- ../lessonvid/vedio1.mp4 -->
        <!-- // ../lessonvid/vedio1.mp4 -->
    <!-- src="<?php if(isset($row['lesson_link'])){ echo $row["lesson_link"];} ?>" -->
    

</div>
 <input type="file" class="form-control-file" id="lesson_link" name="lesson_link"
           
            >

        </div>


       

<div class="text-center">
<button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">

Update
</button>
    <a href="lessons.php" class="btn btn-secondary">Close</a>
</div>
<?php
if(isset($row['lesson_link'])){

   $lesson_link=$row['lesson_link'];
}

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