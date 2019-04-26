<?php
include 'header.php';
include 'nav.php';

?>
<body>

  <ul class="breadcrumb">
    <li><a href="#"><img src="images/phone-book.png"></a></li>
    <li><a href="#">Volunteer</a></li>
  </ul>


     <section class="site-section bg-light">

      <div class="container">
        <div class="row">
          <div class="col-md-8 mt-4">
            <div class="content">
    <img alt="VOLUNTEERS" title="VOLUNTEERS" height="1744" width="2600" style="width: 400px; height: 268px; float: right; margin: 10px;" class="media-element file-default" data-delta="1" typeof="foaf:Image" src="http://medaf.org/sites/default/files/VOLUNTEERS.jpg" />  </div>
            </div>We believe that when ambitious professional muslims get more opportunity it ultimately benefits everyone. We’re committed to giving these ambitious professional muslims the community they need to take the next step in their careers — whatever that means to each of them.</span>
</div></div></div><br>
      <div class="content">
        <div style="padding: 20px 10px;">
          <div style="border:1px solid gold;/*font-size: 18px; font-family:'lucida calligraphy*/';padding: 20px;">
            <h3 style="text-decoration: underline;">Personal Information</h3><br>
            <form method="post" action="db/volunteer.php">
              <div class="row ">
                <div class="col-md-4 form-group box">
                      <label for="name">Fullname</label>
                      <input type="text" id="name" name="fullname"class="form-control" placeholder="Fullname">
                    </div>
                    <div class="col-md-4 form-group box">
                      <label for="name">Gender</label>
                      <select id="form_need" name="gender" class="form-control" required="required"  data-error="      Please specify your need.">
                      <option value="" selected="selected">- Select -</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                     </select>
                    </div>
                   
                     <div class="col-md-4 form-group box">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                     <div class="col-md-4 form-group box">
                      <label for="Course_of_study">Course of study </label>
                      <input type="text" id="Course_of_study" name="course_of_study" class="form-control" placeholder="Course of study ">
                    </div>
                   
                    
                    <div class="col-md-4 form-group box">
                      <label for="name">Area of Interest</label>
                      <select id="form_need" name="area_of_interest" class="form-control" required="required"  data-error="      Please specify your need.">
                         <option value="" selected="selected">- Select -</option>
                     <option value="career_coach">Career Coach</option><option value="career_mentor">Career Mentor</option><option value="career_councillor">Career Councillor</option><option value="subject_tutor">Subject Tutor</option>
                     </select>
                    </div>
                     <div class="col-md-4 form-group box">
                      <label for="name">Location</label>
                      <select id="form_need" name="location" class="form-control" required="required"  data-error="      Please specify your need.">
                     <option value="" selected="selected">- Select -</option>
                    <option value="agege">Agege</option><option value="ajeromi_ifelodun">Ajeromi-Ifelodun</option><option value="alimosho">Alimosho</option><option value="amuwo_odofin">Amuwo-Odofin</option><option value="apapa">Apapa</option><option value="badagry">Badagry</option><option value="coker_aguda">Coker/Aguda</option><option value="epe">Epe</option><option value="eti_osa">Eti-Osa</option><option value="ibeju_lekki">Ibeju-Lekki</option><option value="ifako_ijaye">Ifako-Ijaye</option><option value="ikeja">Ikeja</option><option value="ikorodu">Ikorodu</option><option value="kosofe">Kosofe</option><option value="lagos_island">Lagos Island</option><option value="lagos_mainland">Lagos Mainland</option><option value="mushin">Mushin</option><option value="ojo">Ojo</option><option value="oshodi_isolo">Oshodi-Isolo</option><option value="shomolu">Shomolu</option><option value="surulere">Surulere</option>
                     </select>
                    </div>
                    
                     <div class="col-md-4 form-group box">
                      <label for="name">Level of Competence</label>
                      <select id="form_need" name="level_of_competence" class="form-control" required="required"  data-error="      Please specify your need.">
                     <option value="" selected="selected">- Select -</option><option value="expert">Expert</option><option value="intermediate">Intermediate</option><option value="beginner">Beginner</option>
                     </select>
                    </div>
                    
                    <div class="col-md-4 form-group box">
                      <label for="phone_number">Phone Number</label>
                      <input type="number" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number">
                    </div>
                    
                     <div class="col-md-4 form-group box">
                      <label for="home_address">Home Address</label>
                      <textarea name="home_address" id="home_address" name="home_address" class="form-control " cols="20" rows="6" placeholder="Home Address"></textarea>
                    </div>
                  
            </div>
              <div class="col-md-6 form-group mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form> 

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