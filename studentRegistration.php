
      <form id="stuRegForm"  >
        <div class="mb-3">
        <i class="fa fa-user"></i>
  <label for="stuName" class="form-label">Name</label>
  <small id="statusMsg1"></small>
  <input type="text" class="form-control" id="stuName" placeholder="Enter Your Name">
</div>
<div class="mb-3">
        <i class="fa fa-envelope"></i>
  <label for="stuEmail" class="form-label">Email Address</label>
  <small id="statusMsg2"></small>
  <input type="text" class="form-control" id="stuEmail" placeholder="Enter Your Email Address">
  <small id="emailhelp" class="form-text text-muted"> We'll never Share Your Email with Anyone else.</small>
</div>
<div class="mb-3">
        <i class="fa fa-key"></i>
  <label for="stuPassword" class="form-label">Password</label>
  <small id="statusMsg3"></small>
  <input type="Password" class="form-control" id="stuPassword" placeholder="Enter Your Password">
</div>

</form>
 </div>
      <div class="modal-footer">
      <span id="successMsg"> </span>
        <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>