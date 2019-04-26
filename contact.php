<?php
include 'header.php';
include 'nav.php';

?>

<body>

   <ul class="breadcrumb">
      <li><a href="#"><img src="images/phone-book.png"></a></li>
     <li><a href="#">Contact</a></li>
    </ul>
 
  <div class="content mt-4">
    <?php if (isset($_SESSION['flag'])): ?>
          <div class="alert alert-<?php echo $_SESSION['flag']; ?>"><?php echo $_SESSION['msg']; ?></div>
        <?php endif; ?>
    <div style="padding: 20px 10px;">
<div style="border:1px solid gold;font-size: 12px; padding: 20px; text-align: center;">
<p>You can contact us through any of the means below:</p>
<ul class="fa fa-ul">
<li><i class="fa fa-home fa-fw gold"></i> 13 & 15, Mafoluku Road, Muri aka Lagos</li>
<li><i class="fa fa-phone fa-fw gold"></i> +2347011957223, +2348172445162 </li>
<li><i class="fa fa-envelope fa-fw gold"></i> info@medafng.org</li>
</ul>
</div>
</div>  </div>
  
</div> 
</div>
 
    </div>
    
 
        <section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h2 class="mt-4">You may use this form instead</h2><br>
              <form id="contact" action="db/contact.php" method="post">

                 <div class="form-group ">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" style="height: 35px !important;" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="text" name="phone_number"id="phone" class="form-control" style="height: 35px !important;" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                      <label for="phone">Email</label>
                      <input type="text" name="email"id="phone" class="form-control" style="height: 35px !important;" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <label for="form_message">Write Message</label>
                      <textarea id="form_message"  name="message"  class="form-control" placeholder="Write Message" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                    </div><br>

                       <div class="form-group">
                        <button type="submit" class="btn btn-primary px-2 py-1">Submit</button>
                      </div>
                
              </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </section>
   <section class="overflow">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          
          
          <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5">
            <img src="images/ux.jpg" alt="Image placeholder" class="img-md-fluid">
          </div>
          <div class="col-lg-1 order-lg-2"></div>
          <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
            <blockquote class="testimonial">
              &ldquo; MEDAF has made an immense positive change in my life. &rdquo;
            </blockquote>
            <p>&mdash; Yuusuf Olokode, UX/UI Designer</p>
          </div>
        </div>
      </div>
    </section>
</body>
<?php
include 'footer.php';

?>