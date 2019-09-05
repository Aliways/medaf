<?php
  include 'header.php';
  include 'nav.php';
  include 'login.php';
?>
<body>

  <div class="container">
        <?php if (isset($_SESSION['flag'])): ?>
          <div class="col-md-2 justify-content-md-center alert alert-<?php echo $_SESSION['flag']; ?>" id="msf"><?php echo $_SESSION['msg']; ?></div>
        <?php endif; ?>
  </div>

  

  <ul class="breadcrumb">
    <li><a href="#"><img src="images/phone-book.png"></a></li>
    <li><a href="#">Development Camp</a></li>
  </ul>
   <section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mt-4">
            <div class="content">
    <img alt="VOLUNTEERS" title="VOLUNTEERS" height="1744" width="2600" style="width: 400px; height: 268px; float: right; margin: 10px;" class="media-element file-default" data-delta="1" typeof="foaf:Image" src="images/camp.jpg" />  </div>
            </div>So is camp really of any benefit, or are Muslim parents rightfully saving themselves a few hundred dollars every year by not letting their children attend camp? The main thing to realize is that being in any environment for a few consecutive days and nights surrounded by a bunch of same-aged friends and who-knows-what kind of activities has a big impact on campers as they are influenced by their company and surroundings. And sometimes, these influences may just stick for life.</span>
</div></div></div><br>
              
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-5">
              <form id="development_camp" method='POST' action="db/development_camp.php">
                    <div class="form-group ">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" style="height: 35px !important" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="phone">Course of Study</label>
                      <input type="text" name="course_of_study"id="phone" class="form-control" style="height: 35px !important" required>
                    </div>
                    <div class=" form-group">
                      <label for="academic_level">Academic Level</label>
                      <input type="text" name="academic_level"id="email" class="form-control" style="height: 35px !important" required>
                      E.g, 200 Level, Masters, Bsc etc
                    </div>

                    <div class="form-group">
                      <label for="form_message">Contact Address</label>
                      <textarea id="form_message" name="contact_address" class="form-control" placeholder="Contact Address" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class=" form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                </div>
                </div>
                  </div>
          </div>
        </div>
      </div>
    </section>
 
  <div id="container">
  <div class="container-wrap">
    <div class="content-sidebar-wrap">
      <div id="content">
        
        <section id="post-content" role="main">
                                                            <div class="region region-content">
  <div id="block-system-main" class="block block-system">

      
  <div class="content">
                          <span property="dc:title" content="Register as a volunteer" class="rdf-meta element-hidden"></span>  
      
    


      <footer>
          </footer>
  
    </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
        </section>
      </div>

        <!-- First sidebar -->
                
      </div>

      <!-- Second sidebar -->
        </div>
</div>


</body>


<?php
include 'footer.php';

?>