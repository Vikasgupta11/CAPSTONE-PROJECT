<!-- start including header -->
<?php
 include('dbconnection.php');
 include('./mainInclude/header.php');
?>
<!-- end including header -->

  <!-- End of Navigation Bar  -->

  <!-- Start Vedio background  -->
  <div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
      <video playinline autoplay muted loop>
        <source src="video/bg-vedio.mp4">
        </source>
      </video>
      <div class="vid-overlay">

      </div>
    </div>


    <div class="vid-content">
      <h1 class="my-content"> Welcome to TechLearn</h1>
      <small class="my-content"> Learning Excellence</small> <br>
<!--  if user is login then show only lets go btn elsw show the profile button -->

<?php
if(!isset($_SESSION['is_login'])){
echo' <a href="#" class="btn lets-go-btn mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Lets Go</a>
';

}
else{
  echo'
  <a  class=" btn btn-danger mt-3"    href="Student/studentProfile.php">My Profile </a>';
}
?>


     

      
    </div>
  </div>


  <!-- End of Vedio Background -->

  <!-- Start Text Banner  -->
  <div class="container-fluid  txt-banner banner">
    <div class="row bottom-banner">
      <div class="col-sm">
        <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses </h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-users mr-3"></i> Expert Intructors </h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access </h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee </h5>
      </div>
    </div>

  </div>
  <!-- End Text Banner -->

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
          <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align:left;
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
       
       
          ';
        }
      }
     ?>
      

    </div>
    <!-- end of most popular courses deck 2 -->




   <div class="text-center m-2">
   <a class="btn btn-danger btn-sm" href="courses.php">View All Courses
   </a>
   </div>

  </div>
  <!-- ENd Popular Courses .................-->


<br> 


  <!-- Start contat us -->

  <div class="container mt4" id="Contact">
    <!-- Start  contact Us Conatiner -->

    <h2 class="text-center mb4"> Contact US</h2>
    <div class="row">
      <!-- Start Conact us Row  -->
      <div class="col-md-8">

        <!-- Start Conatact us 1st column -->
        <form action="" method="POST">
          <input type="text" class="form-control" name="name" placeholder="Name"> <br>
          <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
          <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
          <textarea class="form-control" placeholder="How can we help you !" style="height: 150px;"></textarea><br><br>
          <input class="btn btn-primary" type="submit" value="send" name="submit"><br><br>
        </form>
      </div>

      <div class="col-md-4 stripe text-white text-center">
        <!-- Stripe is custom css here above -->
        <h4>TechLearn</h4>
        <p>TechLearn,
          near IIT Bombay ,
          powai andheri,
          mumbai (E) 400018
          maharashtra<br>
          phone no. 3011279864<br>
          www.TechLearn.in
        </p>

      </div>
    </div>
    <!-- ENd  contact Us Conatiner -->


  <!-- End contact us -->



  <!-- Start of testimonial -->

  <div class=" slider owl-carousel">



 <?php
 $sql="SELECT student.stu_name , student.stu_occ , student.stu_img ,feedback.f_content  FROM student INNER  JOIN feedback ON student.stu_id=feedback.stu_id ";

$result=$conn->query($sql);
 if($result->num_rows > 0){
   
while($row=$result->fetch_assoc()){

  $s_img=$row['stu_img'];
  $n_img=str_replace("../","",$s_img);


  
        ?>
   


    <div class="card">
      <div class="img"><img src="<?php echo $n_img; ?> "alt="guys"></div>
      <div class="content">
        <div class="title"><?php echo $row['stu_name'];  ?></div>
        <div class="sub-title"><?php echo $row['stu_occ'];  ?></div>
        <p>
        <?php echo $row['f_content'];  ?>
        </p>
        <divc class="btn">
          <button>Read more</button>
      </div>
    </div> 

<?php
    }

  }
     
  
?>

  </div>    
         


  <!-- End of testimonial -->

 
<!-- Start of socila media Icons -->
<div class="contaner-fluid bg-danger">


<div class="row text-white text-center p-1 higher">
  <div class="col-sm  social" >
    <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
  </div>

  <div class="col-sm social">                     
    <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
  </div>
  
  <div class="col-sm social">
    <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
  </div>
  
  <div class="col-sm social">
    <a class="text-white social-hover" href="#"><i class=" fab fa-instagram"></i> Instagram</a>
  </div>
 

</div>
</div>
<!-- Endof socila media Icons -->

<!-- Start About section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF;">
<div class="container" style="background-color: #E9ECEF;">
<div class="row text-center">
  <div class="col-sm">
    <h5>
      About Us
    </h5>
    <p> 
      TechLearn Provides universal access to the worlds best education, partnering with top universities 
      and organizations to offer courses online.
    </p>
  </div>

  <div class="col-sm Category">
    <h5> Category</h5>
    <a class="text-dark " href="#">Web Development</a><br>
    <a class="text-dark" href="#">Web Designer</a><br>
    <a class="text-dark" href="#">android App dev</a><br>
    <a class="text-dark" href="#">IOS Developer</a><br>
    <a class="text-dark" href="#">Data Analaysis</a><br>

  </div>
  <div class="col-sm">
    <h5>Contact Us</h5>
    <p> TechLearn Pvt Ltd <br> Near Chandivali andheri <br> mumbai Maharastra <br> Ph 3011278644</p>
  </div>
</div>
</div>
</div>

<!-- End of Start Sectoim -->


<!-- start including footer -->
<?php
 include('./mainInclude/footer.php');
?>
<!-- end including footer -->
