<?php

include_once('dbconnection.php');
include('./mainInclude/header.php');

?>
<div class="container-fluid bg-dark">

    <!-- Start Course page -->
    <div class="row">
        <img src="./images/coursebanner.jpg" alt="courses"
            style="height:300px; width:100%; object-fit:cover; box-shadow:10px;">

    </div>

</div>
<!-- End OF Course Banner -->

<div class="container jumbotron mb-5">

    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            <form role="form" id="stuLoginForm">
             
            
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label>
                <small id="statusLogMsg1"></small>
                <input type="email" class="form-control" placeholder="Email" name="stuLogEmail"
                id="stuLogEmail" >
           </div>


             
           <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="stuLogPass" class="pl-2 font-weight-bold">Password</label>
                <small id="statusLogMsg1"></small>
                <input type="password" class="form-control" placeholder="Email" name="stuLogPassword"
                id="stuLogPassword" >
           </div>

<br>
             

           <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
         </form>

         <small id="statusLogMas"></small>
        </div>







<div class="col-md-6 offset-md-1">
    <h5 class="mb-3">New User !! Sign Up</h5>
<div class="row">
<form role="form" id="stuRegForm">
    <div class="form-group" >

        <i class="fa fa-user"></i>
        <label for="stuname" class="pl-2 font-weight-bold">Name</label>&nbsp;&nbsp;&nbsp;   &nbsp;
        <small id="statusMsg1"></small>
        <input type="text" class="form-control" placeholder="Name"
        name="stuName" id="stuName">

    </div> 


    <div class="form-group" >

        <i class="fa fa-envelope"></i>
        <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
        <small id="statusMsg2"></small>
        <input type="text" class="form-control" placeholder="Name"
        name="stuEmail" id="stuEmail">
        
    </div>



    





    <div class="form-group" >

        <i class="fa fa-user"></i>
        <label for="stupass" class="pl-2 font-weight-bold">Password</label>
        <small id="statusMsg1"></small>
        <input type="password" class="form-control" placeholder="Name"
        name="stuPassword" id="stuPassword">
        
    </div>


   



</form>


</div>

<button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>

<small id="successMsg"></small>

</div>

    </div>
</div>
<br>
<br>
<br>
<br>

<?php
include('./mainInclude/footer.php');
?>