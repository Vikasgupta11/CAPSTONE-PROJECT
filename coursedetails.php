<!-- start including header -->
<?php
include('dbconnection.php');

 include('./mainInclude/header.php');
?>
<!-- end including header -->




<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
<div class="row">
<img src="./images/coursebanner.jpg" alt="courses"  style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/> 
</div>
</div>
<!-- end course page bannner-->

<!-- start main content-->
<div  class="container mt-5">

<?php
if(isset($_GET['course_id'])){
  $course_id=$_GET['course_id'];
  $_SESSION['course_id']=$course_id;
  $sql="SELECT * FROM course WHERE course_id='$course_id'";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();

}

?>




 <div class="row">


   <div class="col-md-4">
     <img src="<?php  echo str_replace("../","",$row['course_img']) ;?>" class="card-img-top" class="card-img-top" alt="guitar">
   </div>

   <div class="col-md-8">
    <div class="card-body">
      <h5 class="card-title">Course Name: <?php
       echo($row['course_name']);
       ?>
       </h5>

      <p class="card-text">
       Description: <?php echo($row['course_desc']);?>
      </p>
      
      <p class="card-text"> Duraton:
   <?php
   echo($row['course_duration']);
   ?>
      </p>

     <form action="checkout.php" method="post">
       <p class="class-text d-inline">Price: <small><del>&#8377 <?php
   echo($row['course_original_price']);
   ?></del></small> <span class="font-weight-bolder">&#8377 <?php
   echo($row['course_price']);
   ?><span></p>
       <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
       <input type="hidden" name="id" value="<?php echo($row['course_price']);  ?>
   ">
     </form>
    </div> 
 </div>
</div> 




<div class="container">
 <div class="row">
<table class="table table-bordered table-hover">
   <thead>
     <tr>
       <th scope="col">Lesson No.</th>
       <th scope="col">Lesson Name.</th>
     </tr>
     
<?php


$sql="SELECT * FROM lessons";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows > 0 ){
  $num=0;
  while($row=$result->fetch_assoc()){

if($course_id==$row['course_id']){
  $num++;
echo'
 <tr>
        <th scope="row">'.$num.'</th>
        <td>'.$row['lesson_name'].'</td>
      </tr> 
      
      ';
  }
}
}


?>


  
    </thead> 
    <tbody>
     
    </tbody>
    </table>    
</div>
</div>

<!-- end main content-->

<!-- start including footer -->
<?php
 include('./mainInclude/footer.php');
?>
<!-- end including footer -->
