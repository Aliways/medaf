<?php include "header.php" ?>
<?php include "nav.php" ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm" method='POST' action="db/scholarship.php">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Scholarship Type:

    <select id="form_need" name="scholarship_type" class="form-control" required  data-error="Please specify your need.">
      <option selected disabled>- Select -</option>
      <option value="school_fees_reimbursement">School Fees Reimbursement</option>
      <option value="career_advancement_professional_certification">Career Advancement/Professional Certification</option>
      <option value="orphanage_assistanship">Orphanage Assistanship</option>
    </select>

  </div>
  <div class="tab">Full Name:
    <p><input placeholder="Full Name..." oninput="this.className = ''" name="full_name"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>
  <div class="tab">Gender:
    <select id="form_need" name="gender" class="form-control" required  data-error="Please specify your need.">
      <option selected disabled>- Select -</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
   <!--  <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p> -->
  </div>
  <div class="tab">Religion:
    <select id="form_need" name="religion" class="form-control" required  data-error="Please specify your need.">
      <option selected disabled>- Select -</option>
      <option value="islam">Islam</option>
      <option value="others">Others</option>
    </select>
    <!-- <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p> -->
  </div>
   <div class="tab">Marital Status:
    <select id="form_need" name="marital_status" class="form-control" required  data-error="Please specify your need.">
      <option selected disabled>- Select -</option>
      <option value="single">Single</option>
      <option value="married">Married</option>
      <option value="divorced">Divorced</option>
    </select>
  </div>
   <div class="tab">E-mail:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>
   <div class="tab">Date of Birth:
    <p><input placeholder="dd/mm/yy..." oninput="this.className = ''" name="date_of_birth"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>
   <div class="tab">State of Origin:
    <select id="form_need" name="state_of_origin" class="form-control" required  data-error="Please specify your need.">
      <option selected disabled>- Select -</option>
      <option value="Abia State">Abia State</option><option value="Adamawa State">Adamawa State</option><option value="Akwa Ibom State">Akwa Ibom State</option><option value="Anambra State">Anambra State</option><option value="Bauchi State">Bauchi State</option><option value="Bayelsa State">Bayelsa State</option><option value="Benue State">Benue State</option><option value="Borno State">Borno State</option><option value="Cross River State">Cross River State</option><option value="Delta State">Delta State</option><option value="Ebonyi State">Ebonyi State</option><option value="Edo State">Edo State</option><option value="Ekiti State">Ekiti State</option><option value="Enugu State">Enugu State</option><option value="Federal Capital Territory">Federal Capital Territory</option><option value="Gombe State">Gombe State</option><option value="Imo State">Imo State</option><option value="Jigawa State">Jigawa State</option><option value="Kaduna State">Kaduna State</option><option value="Kano State">Kano State</option><option value="Katsina State">Katsina State</option><option value="Kebbi State">Kebbi State</option><option value="Kogi State">Kogi State</option><option value="Kwara State">Kwara State</option><option value="Lagos State">Lagos State</option><option value="Nasarawa State">Nasarawa State</option><option value="Niger State">Niger State</option><option value="Ogun State">Ogun State</option><option value="Ondo State">Ondo State</option><option value="Osun State">Osun State</option><option value="Oyo State">Oyo State</option><option value="Plateau State">Plateau State</option><option value="Rivers State">Rivers State</option><option value="Sokoto State">Sokoto State</option><option value="Taraba State">Taraba State</option><option value="Yobe State">Yobe State</option><option value="Zamfara State">Zamfara State</option>
    </select>
  </div>
  <div class="tab">Phone Number:
    <p><input placeholder="Phone Number..." oninput="this.className = ''" name="phone_number"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>
  <div class="tab">Islamic Organisation:
    <select id="form_need" name="islamic_organisation" class="form-control" required  data-error="Please specify your need.">
     <option value="" selected="selected">- Select -</option>
      <option value="advanced_centre_for_the_advocacy_development_and_empowerment_of_muslim_community">Advanced Centre for the Adovocacy,Development and Empowerment of Muslim Community(ACADEMY)</option>
      <option value="other">Other...</option>
    </select>
  </div>
  <div class="tab">Local Government Area of Origin & Home Address:
    <p><input placeholder="Local Government Area of Origin..." oninput="this.className = ''" name="local_government_area_of_origin"></p>
      <textarea name="home_address" id="home_address" class="form-control " cols="20" rows="6" placeholder="Home Address"></textarea>
      <textarea name="contact_address_of_islamic_organisation" id="contact_address_of_islamic_organisation" class="form-control " cols="20" rows="6" placeholder="Contact Address of Islamic Organisation"></textarea>
      <textarea name="postal_address" id="Postal Address" class="form-control " cols="20" rows="6" placeholder="Postal Address"></textarea>
  </div>

   <div class="tab">Name of Institution:
   <input type="text" name="name_of_institution">
  </div>
  <div class="tab">Course of Study:
    <p><input placeholder="Course of Study..." oninput="this.className = ''" name="course_of_study"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>
   <div class="tab">Official Website of the Institution/Professional Body:
    <p><input placeholder="Official Website of the Institution/Professional Body..." oninput="this.className = ''" name="official_website_of_institute"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>
  <div class="tab">Certificate Obtained:
    <select id="form_need" name="certificate_obtained" class="form-control" required  data-error="Please specify your need.">
      <option value="" selected="selected">- Select -</option>
     <option value="pry_school_leaving_certificate">Pry School Leaving Certificate</option><option value="wassce">WASSCE</option><option value="neco">NECO</option><option value="nd">ND</option><option value="hnd">HND</option><option value="nce">NCE</option><option value="bsc">Bsc</option><option value="masters">Masters</option><option value="phd">PhD.</option><option value="select_or_other">Other...</option>
    </select>
  </div>
   <div class="tab">Expected year of Program Completion:
    <input type="number" name="expected_year_of_program_completion">
  </div>
  <div class="tab">"Contact address of the Institution/Professional Body:
    <p><input placeholder="Contact address of the Institution/Professional Body..." oninput="this.className = ''" name="contact_address_of_the_institution"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>
  <div class="tab">Personal Statement:
    <p><input placeholder="Personal Statement..." oninput="this.className = ''" name="personal_statement"></p>
    <!-- <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
  </div>


  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<?php include "footer.php" ?>