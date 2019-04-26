<?php 
 // include'auth.php';
  include 'header.php';
  include 'nav.php';
  include 'db/functions.php';
?>
  <body>
    
    <div class="hero-wrap" style="background-image: url('images/african_graduate.png'); background-attachment:fixed;">
       <div class="overlay"></div>
      <div class="container">
        <?php if (isset($_SESSION['flag'])): ?>
          <div class="col-md-2 justify-content-md-center alert alert-<?php echo $_SESSION['flag']; ?>"><?php echo $_SESSION['msg']; ?></div>
        <?php endif; ?>
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">Welcome to the Muslim Educational Aid Foundation (MEDAF)</h1>
            <!-- <p><a href="registration.php" class="btn btn-primary px-4 py-3">Register</a> <a href="login.php" class="btn btn-secondary px-4 py-3">Login</a></p> -->
          </div>
        </div>
      </div>
    </div>

   <!-- Modal -->  <!-- Button trigger modal -->  <!-- I used modal bootstrap here -->

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
      <form id="login" action="db/login.php" method="post">
        <div class="form-group">
          
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="tab">Scholarship Type:
            <select id="form_need" name="scholarship_type" class="form-control" required  data-error="Please specify your need.">
              <option selected disabled>- Select -</option>
              <option value="school_fees_reimbursement">School Fees Reimbursement</option>
              <option value="career_advancement_professional_certification">Career Advancement/Professional Certification</option>
               <option value="orphanage_assistanship">Orphanage Assistanship</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>


   
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><img src="images/vision.png"></div>
              <div class="media-body px-3">
                <h3 class="heading">Vision</h3>
                <p>To evolve a generation of God-conscious intellectuals that will be of immense value to humanity.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><img src="images/mission.png"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Mission</h3>
                <p>To provide resources and services for would-be beneficiaries in order to acquire moral attitude and intellectual competence for the benefit of humanity.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><img src="images/opportunity.png"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Opportunities</h3>
                <p>World class leadership training, career counselling and mentoring, school fees relief, educational scholarship for orphans, academic merit awards, etc.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section-3 img" style="background-image: url(images/twins.png);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-9 about-video text-center">
    				<h2 class="ftco-animate">With support from Muslims around the world, MEDAF has been investing in human capital development.</h2>
    				<div class="video d-flex justify-content-center">
    					<a href="https://vimeo.com/45830194" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-counter bg-light" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo count($applicants)+100 ?>">0</strong>
		                <span>Satisfied Applicants</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="7896">0</strong>
		                <span>Courses Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="400">0</strong>
		                <span>Experts Advisors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Counsellors</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">What Our Recepient Says</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person1.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">When I heard that I had been selected as one of the beneficiaries of the MEDAF Scholarship Foundation, I was overjoyed. The scholarship grant from MEDAF had a positive impact in my life.</p>
                    <p class="name">Muhammad Ali</p>
                    <span class="position">UI/UX Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person2.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">In line with its drive to immensely contribute to raising the standard of education in Nigeria, MEDAF has continued to create the enabling environment for students towards achieving their educational goal</p>
                    <p class="name">Yuusuf Olokode</p>
                    <span class="position">Medical Doctor</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person3.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">MEDAF scholarship foundation is a wonderful initiative which is based purely on merit. Being a beneficiary, I was able to equip myself by acquiring more relevant training and materials that will be useful in my future endeavours.</p>
                    <p class="name">Taofee Anjorin</p>
                    <span class="position">Full-Stack Software Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person5.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">MEDAF cares for the muslim ummah. Through my scholarships and financial aid, I’ve been able to continue my dream of an education. Today someone does for me — tomorrow I will do for someone else.</p>
                    <p class="name">Firdaus Chukwuemeka</p>
                    <span class="position">Law Student</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Experience Advisor</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/passport1.png);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Jafar Abdullah</a></h3>
        					<span class="position">Advisor</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Nobody is, was, will be born smart. But for you to be smart, and act smart, you need to think smart always. It is not a subject of your alma mater, it is the side and fries of what the genius within can comprehend, comply and captivate. Hence, improve on yourself.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person6.png);"></div>
        				<div class="info ml-4">
        					<h3><a href="#">Maryam Ibrahim</a></h3>
        					<span class="position">Advisor</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Too often we underestimate the power of a touch, a smile, a kind word, a listening ear, an honest accomplishment, or the smallest act of caring, all of which have the potential to turn a life around. Hence, seek the wisdom that will untie knot. Seek the paths  that demand your whole being.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person13.png);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Jubril Martins</a></h3>
        					<span class="position">Advisor</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Sometimes, just the act of venting is helpful. Counseling provides a safe haven for precisely that kind of free-ranging release: You can say things in the therapist's office, with the therapist present, that would be incendiary or hurtful in your living room.</p>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-freeTrial">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="d-flex align-items-center">
			    		<div class="free-trial ftco-animate">
			    			<h3>MEDAF MENTORSHIP</h3>
                <p>The selection of a MEDAF Scholar is unique in its attention to a young person’s character. We believe that integrity, courage, grit and personal autonomy are better indicators of overall potential than standard academic measures. To discover these traits, we administer the most comprehensive and thorough scholarship selection process in Nigeria.</p>
			    		</div>
			    		<div class="btn-join ftco-animate">
			    			<p><a href="login.php" class="btn btn-primary py-1 px-2">Login</a></p>
			    		</div>
			    	</div>
    			</div>
    		</div>
    	</div>
    </section>

  
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Inspiring Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="blog.php">The Global Village</a></h3>
                <p>No one can escape from the absolute need of technology in our daily life.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/unilag.png');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="blog.php">The Importance of Education</a></h3>
                <p>It is no secret that a good education has the power to change a life.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/img1.png');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="blog.php">How to standout at start of your UX Career</a></h3>
                <p>UX Design is a career for you if you have relevant education, you are interested in design thinking, you want to study human’s behaviors, or you love innovation and creativity.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Programs</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <!-- <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a> -->
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <!-- <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div> -->
                  <div><!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --></div>
                </div>
                <h3 class="heading mt-3"><a href="leadership.php">Leadership Training</a></h3>
                <p>These are strategic sessions for developing leadership skills and capabilities in individuals. Wining mindshare and service to others are our core values.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <!-- <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a> -->
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                 <!--  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div> -->
                  <div><!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --></div>
                </div>
                <h3 class="heading mt-3"><a href="winners.php">Read 2 Lead Challenge</a></h3>
                <p>Monthly reading challenge that intills a reading habit culture in Muslims. It's a rewarding adventure</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
             <!--  <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');"> -->
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                 <!--  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div> -->
                  <div><!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --></div>
                </div>
                <h3 class="heading mt-3"><a href="conferences.php">Conferences & Seminars</a></h3>
                <p>Occasional sessions to display professionalism in addressing an educational need or challenge.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
             <!--  <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');"> -->
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                 <!--  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div> -->
                  <div><!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --></div>
                </div>
                <h3 class="heading mt-3"><a href="mydc.php">Muslim Youth Development Camps</a></h3>
                <p>This is a biannual session for Muslim youths across the country. The program comes up every Easter break and December break.</p>
              </div>
            </div>
          </div>

           <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
             <!--  <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');"> -->
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                 <!--  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div> -->
                  <div><!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --></div>
                </div>
                <h3 class="heading mt-3" style="max-width: 250%"><a href="conferences.php">Carrer Orientation</a></h3>
                <p>This is an annual session for Muslim youths across the country. The program comes up on the 25th of December every year.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
             <!--  <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');"> -->
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                 <!--  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div> -->
                  <div><!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --></div>
                </div>
                <h3 class="heading mt-3"><a href="winners.php">Read 2Lead Challenge Winners</a></h3>
                <p>The winners of Read 2Lead will be announced at the end of the competition.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    


    </section>
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>By subscribing to this mailing list, you will be receiving newsletters  providing you with information relevant to applying for a MEDAF Scholarship.</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form id="newsletter" method='POST' action="db/newsletter.php" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input name="email_address" type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
<?php
include 'footer.php';
?>


    