
<!-- Start of footer -->

<footer  class="container-fluid bg-dark text-center p-2 ">
<small class="text-white">
Copyright &copy; 2021 || Designed By LearnTech ||<a href="#login" 
data-bs-toggle="modal" data-bs-target="#adminLoginModal">Admin Login</a>
</small>
</footer>
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- End of footer -->

<!-- Start Student Registration -->
<!-- Button trigger modal -->
<!-- Modal -->

 <?php include('studentRegistration.php'); ?>


<!-- End Student Registration -->

<!--Start Student Login-->
<div class="modal fade" id="stuLoginModal" tabindex="-1" aria-labelledby="stuLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="stuloginForm">
        <div class="mb-3">
        <i class="fa fa-envelope"></i>
  <label for="stuLogEmail" class="form-label">Email Address</label>
  <input type="text" class="form-control" id="stuLogEmail" placeholder="Enter Your Email Address">
</div>

<div class="mb-3">
        <i class="fa fa-key"></i>
  <label for="stuLogPassword" class="form-label">Password</label>
  <input type="password" class="form-control" id="stuLogPassword" placeholder="Enter Your Password">
</div>

</form>
 </div>
      <div class="modal-footer">
      <small id="statusLogInBtn"></small>
        <button type="button" class="btn btn-primary" id="stuLoginButton" onclick="checkStuLogin()" >Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!--Stop Student Login-->

<!-- Start Admin Login -->
<div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="stuloginForm">
        <div class="mb-3">
        <i class="fa fa-envelope"></i>
  <label for="adminEmail" class="form-label">Email Address</label>
  <input type="text" class="form-control" id="adminLogEmail" placeholder="Enter Your Email Address">
</div>
<div class="mb-3">
        <i class="fa fa-key"></i>
  <label for="adminPassword" class="form-label">Password</label>
  <input type="password" class="form-control" id="adminLogPassword" placeholder="Enter Your Password">
</div>

</form>
 </div>

      <div class="modal-footer">
      <small id="statusAdminLogMsg"></small>                               
     
        <button type="button" class="btn btn-primary" id="adminLoginButton"  onclick="checkAdminLogin()"   >Login</button>
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- End Admin Login -->
 <!-- jquery file -->
 <script src="js/jquery.js"></script>
 
 <!-- // Sudent Ajax Call javascript -->
 <script src="js/ajaxrequest.js"></script>

 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <script src="js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Admin Request Ajax File  -->
<script src="js/adminajaxrequest.js"></script>

<script>
 $(".slider").owlCarousel({
   loop:true,
autoplay:true,
autoplayTimeout:2000,
autoplayHoverpause:true,

});
  

</script>

</body>
</html>