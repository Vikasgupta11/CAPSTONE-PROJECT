<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!--link  Google fonts for brand name -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <!-- Bootstrap File  -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Awesome fonts  -->
  <link rel="stylesheet" href="css/all.css">
  <!-- Custom CSS File Stle.css -->
  <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/testimonial.css">  
<!-- link for bottom testimonial  css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


</head>


  <body>
  <!-- Starting Navigation Bar  -->
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">LearnTech</a>
      <span class="navbar-text">Learning Excellence</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav custom-nav ">
          <li class="nav-item custom-nav-item"> <a href="index.php" class="nav-link">Home </a></li>
          <li class="nav-item custom-nav-item"> <a href="courses.php" class="nav-link"> Courses</a></li>

          <li class="nav-item custom-nav-item"> <a href="paymentstatus.php" class="nav-link">Payment Status </a></li>
          
          
          <?php
           session_start();
           if(isset($_SESSION['is_login'])){
             echo ' <li class="nav-item custom-nav-item"> <a href="Student/studentProfile.php" class="nav-link">My Profile </a></li>
             <li class="nav-item custom-nav-item"> <a href="logout.php" class="nav-link">Logout </a></li>';
           }else{
             echo'<li class="nav-item custom-nav-item"> <a href="#" class="nav-link"data-bs-toggle="modal" 
             data-bs-target="#stuLoginModal">Login</a></li>
             <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"
             data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup </a></li>';
           }
          ?>


         
          
          <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"> Feedback</a></li>
          <li class="nav-item custom-nav-item"> <a href="contacts.php" class="nav-link"> Contact</a></li>



        </ul>

      </div>
  </nav>
  