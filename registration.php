<?php
  include 'header.php';
  include 'nav.php';
?>
<body>



  <div class="pagebanner"  style="background: /*#00004d*/ #9999ff">  
  <div class="region region-page-banner-text">
  <div id="block-blockify-blockify-page-title" class="block block-blockify">
  <div class="content">
    <h1 class="title" id="page-title" style="color: #fff !important">User account</h1>  
  </div>
  </div>
  <div id="block-blockify-blockify-breadcrumb" class="block block-blockify">
  <div class="content">
    <nav class="breadcrumb"  style="background: /*#00004d*/ #9999ff"><a href="index.php" style="color: #fff">Home</a> » <a href="#" title="" class="active" style="color: #fff">User account</a> »</nav>  </div>
  </div>
  </div>
  </div>
  </div>

  <div class="row">
  <div class="col-md-6 form-group">
  </div>
  </div>

  <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
			<div class="container">
             <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-8 form-group mt-4">
                      <label for="username"><bold>Username</bold></label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="Enter your MEDAF username.">
                    </div>
                    <div class="col-md-8 form-group">
                      <label for="email">E-mail</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address">
                    </div>
                     <div class="col-md-8 form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Enter the password that accompanies your username.">
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
  <?php } ?>
</body>
<?php
include 'footer.php';
?>