<?php
  include 'header.php';
  include 'nav.php';
  include 'login.php';
?>



  <ul class="breadcrumb">
    <li><a href="#"><img src="images/phone-book.png"></a></li>
    <li><a href="#">Leadership Training Form</a></li>
  </ul>
  
    <section class="site-section bg-light mt-4 mb-4">
      <div class="container">
        <br><br>
        <div style="border: 2px #9999ff solid; background-color: #9999ff; border-top-right-radius: 90px; border-top-left-radius: 90px;">
          <h3 align="center" style="color: #fff;">2Lead Challenge</h3>
        </div>
      </div>

       <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-5 mt-4">
              <form id="training_form" method='POST' action="db/leadership_training_form.php">
                    <div class="form-group ">
                      <label for="name">Full Name</label>
                      <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name" style="height: 35px !important;" class="form-control" required>
                    </div>
                   <div class="form-group">
                    <label for="form_message">Contact Address</label>
                    <textarea id="form_message" name="contact_address" class="form-control" placeholder="Contact Address" rows="4" data-error="Please, leave us a message." required></textarea>
                    <div class="help-block with-errors"></div>
                </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
</section>

     
  
  </div>  </div>
  
</div>
        </section>
      </div>

       
                
      </div>

        </div>
</div>

<?php
include 'footer.php';
?>


