
<?php
include_once('../dbconnection.php');

if(!isset($_SESSION))
{
session_start();
}
if(isset($_SESSION['is_login'])){
    $stuLogEmail=$_SESSION['stuLogEmail'];
}
else{
    echo("<script>  location.href='../index.php'; </script>");
}

if(isset($stuLogEmail)){
$sql="SELECT stu_img FROM student WHERE stu_email='$stuLogEmail' ";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$stu_img=$row['stu_img'];


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- CSS BOOTSTRAP   -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<!-- FONT awesome   CSS -->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Google fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet"  href="../css/stustyle.css">

<body>
    <!-- TOP HEADER-->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow " style="background-color: #225470;  height:65px; ">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0"   href="studentProfile.php"><h3>LearnTech</h3></a>
    </nav>


    <!--  start Side Bar -->
    <div class="conatiner-fluid mb-5" style="margin-top:40px" ;>
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none " >
                <div class="sidebar-sticky" style="margin-left:50px">
                    <ul class="nav flex-column " >
                        <li class="nav-item mb-3">
                            <img src="<?php echo $stu_img; ?>" alt="student Image" 
                            style="height:250px; width:300px; "
                            class="img-thumbnail rounded-circle">
                        </li>


                        <li class="nav-items mb-2">
                            <a href="studentProfile.php"  style="text-decoration:none; ">
                            <i class="fa fa-user"></i>
                            Profile<span class="sr-only">(current)</span>
                            </a>
                        </li> 

                        <li class="nav-items mb-2">
                            <a href="myCourse.php" class="nav-links" style="text-decoration:none; ">
                            <i class="fab fa-accessible-icon"></i>
                           MyCourses
                            </a>
                        </li>


                        <li class="nav-items mb-2" >
                            <a href="stufeedback.php" class="nav-links" style="text-decoration:none; ">
                            <i class="fa fa-user"></i>
                            Feedback
                            </a>
                        </li>


                        
                        <li class="nav-items mb-2">
                            <a href="studentChangePass.php" class="nav-links" style="text-decoration:none; ">
                            <i class="fa fa-key"></i>
                            Change Password
                            </a>
                        </li>


                        <li class="nav-items mb-2">
                            <a href="../logout.php" class="nav-links" style="text-decoration:none; ">
                            <i class="fa fa-sign-out-alt"></i>
                            Logout
                            </a>
                        </li>



                    </ul>
                </div>
            </nav>
     
   

    <!--  End Side Bar -->

