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


  <!-- Start Most popular Courses -->
  
  <!-- Start Most popular Courses -->
  <div class="container  mt-5" >
    <h1 class="text-center">Popular-Courses</h1>
    <!-- Start most popular Courses Deck 1 -->
    <div class="card-group mt4 "   style="display: flex;  
  flex-wrap: wrap;" >
    <?php
 
 
 $sql="SELECT * FROM course LIMIT 4";
 $result=$conn->query($sql);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
          $course_id=$row['course_id'];
          echo'
          <a href="coursedetails.php?course_id='.$course_id.'"
           class="btn" style="text-align:left;
          padding:0px; margin:0px;">
               <div class="card">
                 <img src="'.str_replace("../","",$row['course_img']).'" class="card-img-top"  style="height:300px; width:300px;" alt="guitar" />
                 <div class="card-body">
                   <h5 class="card-title">'.$row['course_name'].' </h5>
                   <p class="card-text">'.$row['course_desc'].' </p>
                 </div>
                 <div class="card-footer">
                   <p class="card-text d-inline">Price:<small><del> '.$row['course_original_price'].'</del> </small><span class="font-weight-bolder">
                       &#8377 '.$row['course_price'].'</span>
       
                   </p><a class="btn btn-primary text-white font-weight-bolder float-right"
                     style="float:right; margin:0px 2rem;" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                 </div>
               </div>
       
             </a>
             &nbsp;  &nbsp; 
       
          ';
        }
      }
     ?>





    </div>
    <!-- End of most popoular courses deck 1 -->
<br>
    <!-- Start of most popular courses deck 2 -->
    <div class="card-group mt4 ">
    <?php
 
 
 $sql="SELECT * FROM course LIMIT 4,4";
 $result=$conn->query($sql);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
          $course_id=$row['course_id'];
          echo'
          <a href="#" class="btn" style="text-align:left;
          padding:0px; margin:0px;">
               <div class="card">
                 <img src="'.str_replace("../","",$row['course_img']).'" class="card-img-top" style="height:300px; width:300px;" alt="guitar" />
                 <div class="card-body">
                   <h5 class="card-title">'.$row['course_name'].' </h5>
                   <p class="card-text">'.$row['course_desc'].' </p>
                 </div>
                 <div class="card-footer">
                   <p class="card-text d-inline">Price:<small><del> '.$row['course_original_price'].'</del> </small><span class="font-weight-bolder">
                       &#8377 '.$row['course_price'].'</span>
       
                   </p><a class="btn btn-primary text-white font-weight-bolder float-right"
                     style="float:right; margin:0px 2rem;" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                 </div>
               </div>
       
             </a>
       
          &nbsp;  &nbsp; 
          ';
        }
      }
     ?>



   </div>
<!--  END of deck two -->


   <div class="card-group mt4 ">
    <?php
 
 if($result->num_rows> 8){
 $sql="SELECT * FROM course LIMIT 4";
 $result=$conn->query($sql);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
          $course_id=$row['course_id'];
          echo'
          <a href="#" class="btn" style="text-align:left;
          padding:0px; margin:0px;">
               <div class="card">
                 <img src="'.str_replace("../","",$row['course_img']).'" class="card-img-top" style="height:300px; width:300px;" alt="guitar" />
                 <div class="card-body">
                   <h5 class="card-title">'.$row['course_name'].' </h5>
                   <p class="card-text">'.$row['course_desc'].' </p>
                 </div>
                 <div class="card-footer">
                   <p class="card-text d-inline">Price:<small><del> '.$row['course_original_price'].'</del> </small><span class="font-weight-bolder">
                       &#8377 '.$row['course_price'].'</span>
       
                   </p><a class="btn btn-primary text-white font-weight-bolder float-right"
                     style="float:right; margin:0px 2rem;" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                 </div>
               </div>
       
             </a>
       
          &nbsp;  &nbsp; 
          ';
        }
      }
     ?>



   </div>

<?php
 }
?>


    </div>

  
  <!-- ENd Popular Courses -->








<!-- start including footer -->
<?php
 include('./mainInclude/footer.php');
?>
<!-- end including footer -->
