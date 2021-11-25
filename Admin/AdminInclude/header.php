<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Admin Dashboard</title>
</head>
<script>



document.title="Admin Dashboard";

</script>

<body>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--  Boootsrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- FOnt awesome   CSS -->
  <link rel="stylesheet" href="../css/all.min.css">



  <!-- Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">

  <!-- Custome CSS -->

  <link rel="stylesheet" href="../css/adminstyle.css">
  <!-- Start  Top navbar -->
  <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashBoard.php">
      LearnTech <small> Admin Area</small></a>

  </nav>

  <!-- End Of top Navbar -->

  <!-- Side Bar -->
  <div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row">
      
      <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
        <div class="sidebar-sticky">
          <ul style="list-style: none;">
            <li class="nav-item">
              <a href="adminDashBoard.php" class="nav-link" onclick="changeTitle('Admin Dashboard')" >
                <i class="fas fa-tachometer-alt"></i>
                <!-- <img src="https://img.icons8.com/pastel-glyph/64/000000/speedometer.png" style="height: 25px; width:25px;"/> -->
                Dashboard
              </a>
            </li>


            <li class="nav-item">
              <a href="courses.php" class="nav-link"   onclick="changeTitle('Courses')" >
                <i class="fab fa-accessible-icon"></i>

                Courses
              </a>


            </li>

            <li class="nav-item">
              <a href="lessons.php" class="nav-link"   onclick="changeTitle('Lessons')" >
                <i class="fab fa-accessible-icon"  ></i>

                Lessons
              </a>
            </li>


            <li class="nav-item">
              <a href="students.php" class="nav-link"   onclick="changeTitle('Students')">
                <i class='fas fa-user-alt'></i>

                Students
              </a>
            </li>



            <li class="nav-item">
              <a href="sellReport.php" class="nav-link"   onclick="changeTitle('Sell Report')">
                <i class="fa fa-table"></i>
                Sell Report
              </a>
            </li>


            <li class="nav-item">
              <a href="adminPaymentStatus.php" class="nav-link" >
                <i class="fa fa-table"></i>
                Payment Status
              </a>
            </li>

            <li class="nav-item"  >
              <a href="feedback.php" class="nav-link">
                <i class="fab fa-accessible-icon"></i>

                Feedback
              </a>
            </li>

            <li class="nav-item">
              <a href="adminchangepass.php" class="nav-link" >
                <i class="fa fa-key"></i>

                Change Password
              </a>
            </li>


            <li class="nav-item">
              <a href="../logout.php" class="nav-link">
                <i class="fa fa-sign-out-alt"></i>

                Logout
              </a>
            </li>

          </ul>
        </div>

      </nav>


     