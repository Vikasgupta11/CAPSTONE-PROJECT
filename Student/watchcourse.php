<?php
if(!isset($_SESSION)){
    session_start();
}

include_once("../dbconnection.php");
if(isset($_SESSION["is_login"])){
$stuEmail=$_SESSION['stuLogEmail'];
}else{
   echo("<script> location.href='..index/php';</script>");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Course</title>
  
  
  <!--  CDN Jquery Google Appis File -->
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- CSS BOOTSTRAP   -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">



    <script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script language="javascript" type="text/javascript" src="main.js"></script>




</head>

<!-- FONT awesome   CSS -->
<link rel="stylesheet" href="../css/all.min.css">



<!-- Google fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet"  href="../css/stustyle.css">
</head>
<body>
<div class="container-fluid bg-success p-2">
    <h3>Welcome to Tech Learn </h3>
    <a class="btn btn-danger" href="./myCourse.php">My Courses</a>
</div>   
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 border-right" > 
<h4 class="text-center">Lessons</h4>
<ul id="playlist" class="nav flex-column">
<?php 
if(isset($_GET["course_id"])){
    $course_id=$_GET["course_id"];
    $sql="SELECT  * FROM lessons WHERE course_id='$course_id'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){

          
            echo'
            <li class=" nav-items border-bottom py-2" movieurl="'.$row['lesson_link'].'" 
            style="cursor:pointer;"    
          
            >'.$row['lesson_name'].  


            '</li>
            ';



        }
    }
}



?>





</ul>
</div>
<div class=col-sm-8>

<video id="videoarea" src="" class="mt-5 w-75 ml-2" controls>

</vedio>
</div>
</div>
</div>




<!-- Jqury  and Boostrap File -->
<script type="text/javascript" src="../js/jquery.min.js"> </script>

<script type="text/javascript" src="../js/popper.min.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<!-- // font Awesome -->
   <script type="text/javascript" src="../js/all.min.js"> 

   </script>

<!--  Cutsom Js -->
<script type="text/javascript" src="../js/custom.js">  </script>



</body>
</html>