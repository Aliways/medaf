





<div class="container">
        <?php if (isset($_SESSION['flag'])): ?>
          <div class="col-md-2 justify-content-md-center alert alert-<?php echo $_SESSION['flag']; ?>"><?php echo $_SESSION['msg']; ?></div>
        <?php endif; ?>
  </div>


  


		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body">


      <form id="login" action="db/user_login.php" method="post">
        <div class="form-group">
          
          <label>Email address</label>
          <input type="email" name="email" class="form-control input-sm" id="chk" placeholder="Enter email" required >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>

        <div class="tab">Scholarship Type:
            <select id="form_need" name="scholarship_type" class="form-control" required  data-error="Please specify your need.">
              <option selected disabled>- Select -</option>
              <option value="school_fees_reimbursement">School Fees Reimbursement</option>
              <option value="career_advancement_professional_certification">Career Advancement/Professional Certification</option>
               <option value="orphanage_assistanship">Orphanage Assistanship</option>
            </select>
          </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>