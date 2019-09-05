<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="b/bootstrap.min.css">
</head>
<body>
  <div class="container"><br><br><br>
    
<div class="panel panel-default">
  <div class="panel-heading" style="font-weight:bold;">Registration Form</div>
  <div class="panel-body">
    

    <form id="regForm" method='POST' action="db/scholarship.php">
      <div class="form-group">
        <div class="row">
          <div class="col-md-3">
            <label for="inputEmail4">Scholarship Type</label>
            <select id="form_need" name="scholarship_type" class="form-control input-sm" >
              <option value="">- Select -</option>
              <option value="school_fees_reimbursement" >School Fees Reimbursement</option>
              <option value="career_advancement_professional_certification" >Career Advancement/Professional Certification</option>
              <option value="orphanage_assistanship" >Orphanage Assistanship</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="inputEmail4">Full Name</label>
            <input type="text" class="form-control input-sm" id="inputEmail4" placeholder="Full Name" name="full_name" >
          </div>
          <div class="col-md-3">
            <label for="inputEmail4">Gender</label>
             <select name="gender" class="form-control input-sm" >
              <option value="">- Select -</option>
              <option value="male" >Male</option>
              <option value="female" >Female</option>
            </select>
          </div>
          <div class="col-md-3">
              <label for="inputEmail4">Religion</label>
              <select name="religion" class="form-control input-sm" >
              <option value="">- Select -</option>
              <option value="islaam" >Islaam</option>
              <option value="others" >Others</option>
              </select>
          </div>      
      </div><br>

    <div class="form-group">
      <div class="row">

       <div class="col-md-3">
          <label for="inputEmail4">Marital Status</label>
          <select name="marital_status" class="form-control input-sm" >
          <option value="">- Select -</option>
          <option value="single" >Single</option>
          <option value="married" >Married</option>
          <option value="divorced" >Divorced</option>
          </select>
      </div>

      <div class="col-md-3">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control input-sm" id="inputEmail4" name="email" placeholder="Email" >
      </div>

      <div class="col-md-3">
        <label for="inputEmail4">Password</label>
        <input type="password" class="form-control input-sm" id="inputEmail4" name="password" placeholder="Password" >
      </div>

      <div class="col-md-3">
        <label for="inputEmail4">Date of Birth</label>
        <input type="date" class="form-control input-sm" id="inputEmail4" name="date_of_birth" placeholder="Date of Birth" >
      </div>

      </div>
    </div><br>

    <div class="form-group">
      <div class="row">

        <div class="col-md-3">
        <label for="inputEmail4">State of Origin</label>
        <select name="state_of_origin" class="form-control input-sm" >
          <option value="">- Select -</option>
          <option value="Abia State">Abia State</option><option value="Adamawa State">Adamawa State</option><option value="Akwa Ibom State">Akwa Ibom State</option><option value="Anambra State">Anambra State</option><option value="Bauchi State">Bauchi State</option><option value="Bayelsa State">Bayelsa State</option><option value="Benue State">Benue State</option><option value="Borno State">Borno State</option><option value="Cross River State">Cross River State</option><option value="Delta State">Delta State</option><option value="Ebonyi State">Ebonyi State</option><option value="Edo State">Edo State</option><option value="Ekiti State">Ekiti State</option><option value="Enugu State">Enugu State</option><option value="Federal Capital Territory">Federal Capital Territory</option><option value="Gombe State">Gombe State</option><option value="Imo State">Imo State</option><option value="Jigawa State">Jigawa State</option><option value="Kaduna State">Kaduna State</option><option value="Kano State">Kano State</option><option value="Katsina State">Katsina State</option><option value="Kebbi State">Kebbi State</option><option value="Kogi State">Kogi State</option><option value="Kwara State">Kwara State</option><option value="Lagos State">Lagos State</option><option value="Nasarawa State">Nasarawa State</option><option value="Niger State">Niger State</option><option value="Ogun State">Ogun State</option><option value="Ondo State">Ondo State</option><option value="Osun State">Osun State</option><option value="Oyo State">Oyo State</option><option value="Plateau State">Plateau State</option><option value="Rivers State">Rivers State</option><option value="Sokoto State">Sokoto State</option><option value="Taraba State">Taraba State</option><option value="Yobe State">Yobe State</option><option value="Zamfara State">Zamfara State</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="inputEmail4">Phone Number</label>
        <input type="tel" class="form-control input-sm" id="inputEmail4" name="phone_number" placeholder="Phone Number" >
      </div>

     <div class="col-md-3">
          <label for="inputEmail4">Islamic Organisation</label>
          <select name="islamic_organisation" class="form-control input-sm" >
          <option value="">- Select -</option>
          <option value="advanced_centre_for_the_advocacy_development_and_empowerment_of_muslim_community" >Advanced Centre for the Adovocacy,Development and Empowerment of Muslim Community(ACADEMY)</option>
          <option value="other" >Others</option>
          </select>
      </div>
      <div class="col-md-3">
        <label for="inputEmail4">LGA Origin</label>
        <input type="text" class="form-control input-sm" name="local_government_area_of_origin" id="inputEmail4" placeholder="Local Government Area of Origin" >
      </div>

      </div>
      
    </div><br>

    <div class="form-group">
      <div class="row">

        <div class="col-md-3">
          <label for="inputEmail4">Home Address</label>
          <textarea name="home_address" class="form-control input-sm" ></textarea>
        </div>

      <div class="col-md-3">
        <label for="inputEmail4">Name of Institution</label>
        <input type="text" class="form-control input-sm" name="name_of_institution" id="inputEmail4" placeholder="Name of Institution" >
      </div>

      <div class="col-md-3">
        <label for="inputEmail4">Course of Study</label>
        <input type="text" class="form-control input-sm" name="course_of_study" id="inputEmail4" placeholder="Course of Study" >
      </div>

      <div class="col-md-3">
        <label for="inputEmail4">Official Website of the Institution/Professional Body</label>
        <input type="text" class="form-control input-sm" name="official_website_of_the_institution" id="inputEmail4" placeholder="Official Website of the Institution/Professional Body" >
      </div>
      </div>
      
    </div><br>

    <div class="form-group">
      <div class="row">

        <div class="col-md-3">
          <label for="inputEmail4">Certificate Obtained</label>
          <select name="certificate_obtained" class="form-control input-sm" name="certificate_obtained" >
            <option value="">- Select -</option>
            <option value="pry_school_leaving_certificate">Pry School Leaving Certificate</option><option value="wassce">WASSCE</option><option value="neco">NECO</option><option value="nd">ND</option><option value="hnd">HND</option><option value="nce">NCE</option><option value="bsc">Bsc</option><option value="masters">Masters</option><option value="phd">PhD.</option><option value="select_or_other">Other...</option>
          </select>
        </div>

        <div class="col-md-3">
          <label for="inputEmail4">Expected year of Program Completion</label>
          <input type="number" class="form-control input-sm" id="inputEmail4" name="expected_year_of_program_completion" placeholder="Expected year of Program Completion" >
        </div>

        <div class="col-md-3">
          <label>Contact address of the Institution/Professional Body</label>
          <textarea name="contact_address_of_islamic_organisation" class="form-control" ></textarea>
        </div>

        <div class="col-md-3">
          <label>Personal Statement</label>
          <textarea name="personal_statement" class="form-control" ></textarea>
        </div>

       
      
      </div>
      
    </div>

    <div class="form-group">
      <div class="row">

        <div class="col-md-3">
          <label>postal Address</label>
          <textarea name="postal_address" class="form-control" ></textarea>
        </div>

        <div class="col-md-3">
          <label>contact_address_of_the_institution</label>
          <textarea name="contact_address_of_the_institution" class="form-control" ></textarea>
        </div>

       
      
      </div>
      
    </div>

    <div class="form-group">
       <input type="submit"  name="submit" class="btn btn-primary">
     
    </div>
  
  </form>


  </div>
</div>
 
      
      
  </div>  
</body>
</html>


