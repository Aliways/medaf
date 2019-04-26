<?php
include 'header.php';
include 'nav.php';

?>
<body>

   <ul class="breadcrumb">
    <li><a href="#"><img src="images/phone-book.png"></a></li>
    <li><a href="#">Register for Read 2Lead Challenge</a></li>
  </ul>

   <section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mt-4 ml-2">
            <div class="content">
             <!--  <img src="images/challenge.jpg" alt="Trulli" width="500" height="333"> -->
     <img alt="VOLUNTEERS" title="VOLUNTEERS" height="1744" width="2600" style="width: 400px; height: 268px; float: right; margin: 10px;" class="media-element file-default" data-delta="1" typeof="foaf:Image" src="images/challenge.jpg" /> </div>
            </div>Sometimes in addressing a challenge it is useful to think in terms of building something positive as much as reducing or eliminating something negative.  Consideration should be given to the positive or desired behaviour that needs to be incentivised and promoted. At the start of most processes it is difficult to pin down all the issues and tasks that need to be done and to foresee the time required to undertake and deliver these.  However, what matters is getting some initial working thoughts and assumptions down on paper to share with others and provide an initial steer or guide.

</span>
</div></div></div><br>

 <section class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <h2 class="mb-2">Register for Read 2Lead Challenge</h2>
            <form id="read_2_lead_form" action="db/read_2_lead_form.php" method="post">
              <div class="form-group">
                <label for="name">Full Name</label>
                  <input type="text" id="name" name="full_name" style="height: 35px !important;" class="form-control">
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="number" id="phone_number" name="phone_number" style="height: 35px !important;" class="form-control">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" style="height: 35px !important;" class="form-control">
                </div>

                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select id="form_need" name="gender" class="form-control" required="required" data-error="Please specify your need." style="height: 35px !important;" class="form-control">
                  <option value=""></option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  </select> 
                </div>
              
                <div class="form-group">
                   <button type="submit" class="btn btn-primary px-2 py-1">Submit</button>
                </div>
                
              </form>
          </div>
          <div class="col-md-3"></div>
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