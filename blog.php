
<?php session_start(); ?>
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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



        <link rel="icon" type="image/png" sizes="96x96" href="images/logo.png">
      
        <style type="text/css">
            .modal-dialog{
               width: 30%;
               margin: auto;
            }

            * {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
 /* padding: 20px;*/
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
/*.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}*/

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
/*.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}*/

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #167ce9;
}

.my-small-btn, .btn-primary:hover, .btn-primary:active, .btn-primary:visited{
    width:100px;
    padding:1px;
    color: #fff;
    background-color: #167ce9;
    float: center;
}
           
        </style>
        
      
    </head>


<?php
include 'nav.php';
include 'login.php';

?>
<body>

  <ul class="breadcrumb">
      <li><a href="#"><img src="images/blog.png"></a></li>
      <!-- <li><a href="#">Home</a></li> -->
      <li><a href="#">Blog</a></li>
    </ul>




<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h5>The Global Village</h5>
      <h5><small>THURSDAY, 04 JULY 2019 BY <b style="color: #7F3E98"><a href="#">MEDAF</a></b></small></h5>
      <div style="height:200px;"><img src="images/image_1.jpg" alt="Smiley face" width="700" height="200"></div><br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p><br>
      <a class="btn btn-group-small my-small-btn"  target="_blank" id="form-submit" href="global_village.php">READ MORE</a>

    </div>
     <div class="card">
      <h5>The Importance of Education</h5>
      <h5><small>THURSDAY, 04 JULY 2019 BY <b style="color: #7F3E98"><a href="#">MEDAF</a></b></small></h5>
      <div style="height:200px;"><img src="images/unilag.png" alt="Smiley face" width="700" height="200"></div><br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p><br>
      <a class="btn btn-group-small my-small-btn"  target="_blank" id="form-submit" href="importance_of_education.php">READ MORE</a>

    </div>
     <div class="card">
      <h5>How to standout at start of your UX Career</h5>
      <h5><small>THURSDAY, 04 JULY 2019 BY <b style="color: #7F3E98"><a href="#">MEDAF</a></b></small></h5>
      <div style="height:200px;"><img src="images/img1.png" alt="Smiley face" width="700" height="200"></div><br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p><br>
      <a class="btn btn-group-small my-small-btn"  target="_blank" id="form-submit" href="ux_career.php">READ MORE</a>

    </div>
     <div class="card">
      <h5>The Global Village</h5>
      <h5><small>THURSDAY, 04 JULY 2019 BY <b style="color: #7F3E98"><a href="#">MEDAF</a></b></small></h5>
      <div style="height:200px;"><img src="images/image_1.jpg" alt="Smiley face" width="700" height="200"></div><br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p><br>
      <a class="btn btn-group-small my-small-btn"  target="_blank" id="form-submit" href="global_village.php">READ MORE</a>
    </div><br><br>

     <div class="card">
      <h5>The Importance of Education</h5>
      <h5><small>THURSDAY, 04 JULY 2019 BY <b style="color: #7F3E98"><a href="#">GMC</a></b></small></h5>
      <div style="height:200px;"><img src="images/unilag.png" alt="Smiley face" width="700" height="200"></div><br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p><br>
       <a class="btn btn-group-small my-small-btn"  target="_blank" id="form-submit" href="importance_of_education.php">READ MORE</a>
    </div><br><br>

     <div class="card">
      <h5>How to standout at start of your UX Career</h5>
      <h5><small>THURSDAY, 04 JULY 2019 BY <b style="color: #7F3E98"><a href="#">GMC</a></b></small></h5>
      <div style="height:200px;"><img src="images/img1.png" alt="Smiley face" width="700" height="200"></div><br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p><br>
       <a class="btn btn-group-small my-small-btn"  target="_blank" id="form-submit" href="ux_career.php">READ MORE</a>
    </div><br><br>
    <!-- <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div> -->
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h5>RECENTLY PUBLISHED</h5><hr>
      <div style="height:100px;"><img src="images/image_1.jpg" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="global_village.php">The Global Village</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr>

       <div style="height:100px;"><img src="images/unilag.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="importance_of_education.php">The Importance of Education</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr>

      <div style="height:100px;"><img src="images/img1.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="ux_career.php">How to standout at start of your UX Career</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr>

      <div style="height:100px;"><img src="images/image_1.jpg" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="global_village.php">The Global Village</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr> 

      <div style="height:100px;"><img src="images/unilag.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="importance_of_education.php">The Importance of Education</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr>

       <div style="height:100px;"><img src="images/img1.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="ux_career.php">How to standout at start of your UX Career</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p> <br><hr>

       <div style="height:100px;"><img src="images/image_1.jpg" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="global_village.php">The Global Village</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr> 

      <div style="height:100px;"><img src="images/unilag.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="importance_of_education.php">The Importance of Education</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr>

       <div style="height:100px;"><img src="images/img1.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="ux_career.php">How to standout at start of your UX Career</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p> <br><hr>

       <div style="height:100px;"><img src="images/image_1.jpg" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="global_village.php">The Global Village</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr> 

      <div style="height:100px;"><img src="images/unilag.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="importance_of_education.php">The Importance of Education</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p><br><hr>

       <div style="height:100px;"><img src="images/img1.png" class="img-responsive img-center"  width="150" height="70"> <p><a href="#"></a><p style="color: #7F3E98"><a href="ux_career.php">How to standout at start of your UX Career</a></p></div><br>
      <p>Gems Consulting Company Limited, a Gold Enterpr...</p> <br>

       <br>           
    </div>
  </div>
</div>
  </body>
<?php
include 'footer.php';

?>
 








