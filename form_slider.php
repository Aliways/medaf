<!DOCTYPE html>
<html lang="en">
  	<head>
        <title>MEDAF</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/ionicons.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">

        
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php
        include 'nav.php';
        ?>
	</head>
	<body>  
    <div class="container py-5">  
        <h4 class="text-center text-uppercase">Carousel Slides With indicators</h4>  
        <div id="carouselExampleIndicators" class="carousel slide">  
            <ol class="carousel-indicators">  
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>  
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>  
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>  
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>  
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>  
            </ol>  
            <div class="carousel-inner">  
                <div class="carousel-item active">  
                     <div class="col-md-6 form-group">
			            <label for="name">Scholarship Type</label>
			              <select id="form_need" name="marital status" class="form-control" required  data-error="Please specify your need.">
			                <option value="" selected="selected">- Select -</option>
			                <option value="school_fees_reimbursement">School Fees Reimbursement</option>
			                <option value="career_advancement_professional_certification">Career Advancement/Professional Certification</option>
			                <option value="orphanage_assistanship">Orphanage Assistanship</option>
			               </select>
			           </div>   
                </div>

                <div class="carousel-item">  
                    <div class="row ">
		                <div class="col-md-4 form-group box">
		                      <label for="name">First Name</label>
		                      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
		                    </div>
		                    <div class="col-md-4 form-group box">
		                      <label for="phone">Middle Name</label>
		                      <input type="text" name="middle_name"id="phone" class="form-control" placeholder="Middle Name">
		                    </div>
		                    <div class="col-md-4 form-group box">
		                      <label for="email" name="">surname</label>
		                      <input type="email" id="email" class="form-control" placeholder="Surname">
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
		                      <label for="name">Religion</label>
		                      <select id="form_need" name="religion" class="form-control" required="required"  data-error="      Please specify your need.">
		                      <option value="" selected="selected">- Select -</option>
		                      <option value="islam">Islam</option>
		                      <option value="others">Others</option>
		                     </select>
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="name">Marital Status</label>
		                      <select id="form_need" name="marital status" class="form-control" required="required"  data-error="      Please specify your need.">
		                      <option value="" selected="selected">- Select -</option>
		                      <option value="single">Single</option>
		                      <option value="married">Married</option>
		                      <option value="divorced">Divorced</option>
		                     </select>
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="email">Email</label>
		                      <input type="email" name="email" id="email" class="form-control" placeholder="Email">
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="email">Date of Birth</label>
		                      <input type="email" name="date_of_birth"id="email" class="form-control" placeholder="dd/mm/yy">
		                    </div>
		                   
		                    
		                    <div class="col-md-4 form-group box">
		                      <label for="name">State of Origin</label>
		                      <select id="form_need" name="state_of_origin" class="form-control" required="required"  data-error="      Please specify your need.">
		                      <option value="" selected="selected">- Select -</option>
		                      <option value="Abia State">Abia State</option><option value="Adamawa State">Adamawa State</option><option value="Akwa Ibom State">Akwa Ibom State</option><option value="Anambra State">Anambra State</option><option value="Bauchi State">Bauchi State</option><option value="Bayelsa State">Bayelsa State</option><option value="Benue State">Benue State</option><option value="Borno State">Borno State</option><option value="Cross River State">Cross River State</option><option value="Delta State">Delta State</option><option value="Ebonyi State">Ebonyi State</option><option value="Edo State">Edo State</option><option value="Ekiti State">Ekiti State</option><option value="Enugu State">Enugu State</option><option value="Federal Capital Territory">Federal Capital Territory</option><option value="Gombe State">Gombe State</option><option value="Imo State">Imo State</option><option value="Jigawa State">Jigawa State</option><option value="Kaduna State">Kaduna State</option><option value="Kano State">Kano State</option><option value="Katsina State">Katsina State</option><option value="Kebbi State">Kebbi State</option><option value="Kogi State">Kogi State</option><option value="Kwara State">Kwara State</option><option value="Lagos State">Lagos State</option><option value="Nasarawa State">Nasarawa State</option><option value="Niger State">Niger State</option><option value="Ogun State">Ogun State</option><option value="Ondo State">Ondo State</option><option value="Osun State">Osun State</option><option value="Oyo State">Oyo State</option><option value="Plateau State">Plateau State</option><option value="Rivers State">Rivers State</option><option value="Sokoto State">Sokoto State</option><option value="Taraba State">Taraba State</option><option value="Yobe State">Yobe State</option><option value="Zamfara State">Zamfara State</option>
		                     </select>
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="local_government">Local Government</label>
		                      <input type="local_government" name="local_government"id="local_government" class="form-control" placeholder="Local Government of Origin">
		                    </div>
		                    <div class="col-md-4 form-group box">
		                      <label for="phone_number">Phone Number</label>
		                      <input type="number" name="phone_number" id="email" class="form-control" placeholder="Phone Number">
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="islamic_organisation">Islamic Organisation</label>
		                      <select id="form_need" name="islamic_organisation" class="form-control" required="required"  data-error="      Please specify your need.">
		                      <option value="" selected="selected">- Select -</option>
		                      <option value="advanced_centre_for_the_adovocacy_development_and_empowerment of_muslim_community">Advanced Centre for the Adovocacy,Development and Empowerment of Muslim Community(ACADEMY)</option>
		                      <option value="other">Other...</option>
		                     </select>
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="home_address">Home Address</label>
		                      <textarea name="home_address" name="home_address"id="Home Address" class="form-control " cols="20" rows="6" placeholder="Home Address"></textarea>
		                    </div>
		                    <div class="col-md-4 form-group box">
		                      <label for="contact_address">Contact Address</label>
		                      <textarea name="contact_address" id="contact_address" class="form-control " cols="20" rows="6" placeholder="Contact Address of Islamic Organisation"></textarea>
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="postal_address">Postal Address</label>
		                      <textarea name="postal_address" id="Postal Address" class="form-control " cols="20" rows="6" placeholder="Postal Address"></textarea>
		                    </div>
		            </div>
                </div>

                <div class="carousel-item">  
                    <div class="row ">
               
		                    <div class="col-md-4 form-group box">
		                      <label for="name">Name of Institution</label>
		                      <input type="text" name="name_of_institution">
		                    </div>
		                    
		                     <div class="col-md-4 form-group box">
		                      <label for="Course of study">Course of study</label>
		                      <input type="Course of study" name="course_of_study" id="Course of study" class="form-control" placeholder="Course of study">
		                    </div>
		          
		                     <div class="col-md-4 form-group box">
		                      <label for="email">Official Website</label>
		                      <input type="website"   name="official_website" id="email" class="form-control" placeholder="official website of the Institution/Professional Body">
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="name">Certificate Obtained</label>
		                      <select id="form_need" name="marital status" class="form-control" required="required"  data-error="      Please specify your need.">
		                      <option value="pry_school_leaving_certificate">Pry School Leaving Certificate</option><option value="wassce">WASSCE</option><option value="neco">NECO</option><option value="nd">ND</option><option value="hnd">HND</option><option value="nce">NCE</option><option value="bsc">Bsc</option><option value="masters">Masters</option><option value="phd">PhD.</option><option value="select_or_other">Other...</option>
		                     </select>
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="name">Expected year of Program Completion</label>
		                      <input type="text" name="expected_year_of_program_completion">
		                    </div>
		                   
		                    <div class="col-md-4 form-group box">
		                      <label for="contact_address">Contact address</label>
		                      <textarea name="contact_address" id="contact_address" class="form-control " cols="20" rows="6" placeholder="Contact address of the Institution/Professional Body"></textarea>
		                    </div>
		            </div>
                </div>

                <div class="carousel-item">  
                    <div class="row ">
               
		                    <div class="col-md-4 form-group box">
		                      <label for="name">Name of Institution</label>
		                     <input type="text" name="name_of_institution">
		                    </div>
		                    
		                     <div class="col-md-4 form-group box">
		                      <label for="Course of study">Course of study</label>
		                      <input type="Course of study" name="course_of_study" id="Course of study" class="form-control" placeholder="Course of study">
		                    </div>
		          
		                     <div class="col-md-4 form-group box">
		                      <label for="email">Official Website</label>
		                      <input type="website" name="official_website" id="email" class="form-control" placeholder="official website of the Institution/Professional Body">
		                    </div>
		                     <div class="col-md-4 form-group box">
		                      <label for="certificate_obtained">Certificate Obtained</label>
		                      <select id="form_need" name="certificate_obtained" class="form-control" required="required"  data-error="      Please specify your need.">
		                      <option value="pry_school_leaving_certificate">Pry School Leaving Certificate</option><option value="wassce">WASSCE</option><option value="neco">NECO</option><option value="nd">ND</option><option value="hnd">HND</option><option value="f">NCE</option><option value="g">Bsc</option><option value="masters">Masters</option><option value="phd">PhD.</option><option value="select_or_other">Other...</option>
		                     </select>
		                    </div>
		                    <!--  <div class="col-md-4 form-group box">
		                      <label for="name">Expected year of Program Completion</label>
		                      <select id="form_need" name="marital status" class="form-control" required="required"  data-error="      Please specify your need.">
		                     <option value="1">Less than one year</option><option value="2">1-2</option><option value="3">3-4</option><option value="4">5-6</option><option value="select_or_other">Other...</option>
		                     </select>
		                    </div> -->
		                   
		                    <!-- <div class="col-md-4 form-group box">
		                      <label for="message">Contact address</label>
		                      <textarea name="message" id="message" class="form-control " cols="20" rows="6" placeholder="Contact address of the Institution/Professional Body"></textarea>
		                    </div> -->
		            </div>
                </div>  

                <div class="carousel-item">  
                    <div class="row ">
		                <div class="col-md-6 form-group box">
		                    <label for="message">Personal Statement</label>
		                    <textarea name="message" id="message" class="form-control " cols="20" rows="6" placeholder="Give a brief statement stating the reasons why you think you should be considered for this scholarship opportunity"></textarea>
		                </div>
		              </div>
                </div>

                <div class="carousel-item">  
                    <div  class="form-item webform-component webform-component-file webform-component--documents--invoice">
						  <label for="edit-submitted-documents-invoice-upload">Invoice <span class="form-required" title="This field is required.">*</span></label>
						 <div class="form-managed-file"><input type="file" id="edit-submitted-documents-invoice-upload" name="files[submitted_documents_invoice]" size="22" class="form-file" /><input type="submit" id="edit-submitted-documents-invoice-upload-button" name="submitted_documents_invoice_upload_button" value="Upload" class="form-submit" /><input type="hidden" name="submitted[documents][invoice][fid]" value="0" />
						</div>
						 <div class="description">A scanned copy of the invoice to be paid<br />Files must be less than <strong>2 MB</strong>.<br />Allowed file types: <strong>gif jpg jpeg png pdf</strong>.</div><br>

						  <label for="edit-submitted-documents-school-id-card-upload">School ID Card <span class="form-required" title="This field is required.">*</span></label>
						 <div class="form-managed-file"><input type="file" id="edit-submitted-documents-school-id-card-upload" name="files[submitted_documents_school_id_card]" size="22" class="form-file" /><input type="submit" id="edit-submitted-documents-school-id-card-upload-button" name="submitted_documents_school_id_card_upload_button" value="Upload" class="form-submit" /><input type="hidden" name="submitted[documents][school_id_card][fid]" value="0" />
						</div>
						 <div class="description">Files must be less than <strong>2 MB</strong>.<br />Allowed file types: <strong>gif jpg jpeg png pdf</strong>.</div><br>

						 <label for="edit-submitted-documents-last-exam-result-upload">Last Exam Result <span class="form-required" title="This field is required.">*</span></label>
						 <div class="form-managed-file"><input type="file" id="edit-submitted-documents-last-exam-result-upload" name="files[submitted_documents_last_exam_result]" size="22" class="form-file" /><input type="submit" id="edit-submitted-documents-last-exam-result-upload-button" name="submitted_documents_last_exam_result_upload_button" value="Upload" class="form-submit" /><input type="hidden" name="submitted[documents][last_exam_result][fid]" value="0" />
						</div>
						 <div class="description">Files must be less than <strong>2 MB</strong>.<br />Allowed file types: <strong>gif jpg jpeg png pdf</strong>.</div>
						</div><br>

						<div id="edit-submitted-passport-ajax-wrapper"><div  class="form-item webform-component webform-component-file webform-component--passport">
						  <label for="edit-submitted-passport-upload">Passport <span class="form-required" title="This field is required.">*</span></label>
						 <div class="form-managed-file"><input type="file" id="edit-submitted-passport-upload" name="files[submitted_passport]" size="22" class="form-file" /><input type="submit" id="edit-submitted-passport-upload-button" name="submitted_passport_upload_button" value="Upload" class="form-submit" /><input type="hidden" name="submitted[passport][fid]" value="0" />
						</div>
						 <div class="description">Files must be less than <strong>2 MB</strong>.<br />Allowed file types: <strong>gif jpg jpeg png</strong>.</div>
						</div>
						</div>
                </div>
            </div>  
              
        </div>  
    </div>  
    <div>
    	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">  
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>  
                <span class="sr-only">Previous</span>  
            </a>  
            <a class="carousel-control-next mr-5" href="#carouselExampleIndicators" role="button" data-slide="next">  
                <span class="carousel-control-next-icon " aria-hidden="true"></span>  
                <span class="sr-only">Next</span>  
            </a>
        </div>
</body>  


<?php
include 'footer.php';
?> 

